<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Twilio extends CI_Controller {
    public function index() {
        $from = $this->input->post('From');
        $body = $this->input->post('Body');

        if (strtolower($body) == 'play') {
            $this->play($from);
        } else {
            $this->doMove($from, $body);
        }
    }

    private function play($from) {
        $this->load->model('User');
        $this->load->model('Game');

        $user = $this->User->loadByPhone($from);
        if (!$user) {
            $user = $this->User->make();
            $user->setPhoneNumber($from);
            $user->setPlaying(1);
            $userId = $this->User->save($user);

            $game = $this->Game->make();
            $game->setPlayer1($userId);
            $game->setPlayer2(0);
            $url = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 5);
            $game->setUrl($url);
            $gameId = $this->Game->save($game);
        } elseif ($user->getPlaying()) {
            $game = $this->Game->loadByPhone($user->getPhoneNumber());
            $data = array(
                'url' => $game->getUrl(),
            );

            $this->load->view('twilio/already_playing', $data);
            return;
        }

        $data = array(
            'gameUrl' => $url,
        );

        $this->load->view('twilio/play', $data);
    }

    private function doMove($from, $move) {
        $this->load->model('Game');
        $this->load->library('Chess');

        $game = $this->Game->loadByPhone($from);
        $board = $this->chess->getChess();
        $board->resetGame($game->getFen());

        $move = explode(' ', $move);
        if (count($move) == 1) {
            $ret = $board->moveSAN($move[0]);
        } else {
            $ret = $board->moveSquare($move[0], $move[1]);
        }

        if ($board->isError($ret)) {
            $data = array(
                'err' => $ret->getMessage(),
            );

            $this->load->view('twilio/move_error', $data);
            return;
        }

        $spec = array(
            0 => array("pipe", "r"),
            1 => array("pipe", "w"),
            2 => array("pipe", "a")
        );

        $cwd = '/Users/v64/Projects/chessms/application/third_party/';
        $engine = proc_open(dirname(__FILE__) . '/../third_party/stockfish', $spec, $pipes, $cwd);
        fwrite($pipes[0], 'setoption name OwnBook value book.bin' . "\n" . 'position fen ' . $board->renderFen() . "\n" . 'go depth 8');
        fclose($pipes[0]);
        sleep(5);
        $move = stream_get_contents($pipes[1]);
        fclose($pipes[1]);
        fclose($pipes[2]);
        proc_close($engine);

        preg_match('/bestmove (.*) ponder/', $move, $matches);
        $compMove = $matches[1];
        $compMove1 = substr($compMove, 0, 2);
        $compMove2 = substr($compMove, 2);
        $board->moveSquare($compMove1, $compMove2);

        $game->setFen($board->renderFen());
        $this->Game->save($game);

        $data = array(
            'compMove' => "{$compMove1} to {$compMove2}",
        );

        $this->load->view('twilio/move_made', $data);
    }

    private function unknown() {
        $this->load->view('twilio/unknown');
    }
}
