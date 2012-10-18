<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gamec extends CI_Controller {
    public function index($url) {
        $this->load->model('Game');
        $this->load->library('Chess');

        $game = $this->Game->loadByUrl($url);
        $fen = $game->getFen();

        $board = $this->chess->getChess();
        $board->resetGame($fen);
        $toMove = $board->toMove() == 'W' ? 'White' : 'Black';

        $data = array(
            'fen' => $fen,
            'toMove' => $toMove,
        );

        $this->template->load('game', $data);
    }
}
