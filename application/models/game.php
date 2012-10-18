<?php
class Game extends CI_Model {
    public function make() {
        $game = R::dispense('games');

        // Default starting position
        $game->setFen('rnbqkbnr/pppppppp/8/8/8/8/PPPPPPPP/RNBQKBNR w KQkq - 0 1');

        return $game;
    }

    public function save($game) {
        $game->setLastMoveTimestamp(date('Y-m-d H:i:s'));

        $id = R::store($game);
        return $id;
    }

    public function loadById($id) {
        return R::load('games', $id);
    }

    public function loadByUrl($url) {
        return R::findOne('games', 'url = ?', array($url));
    }

    public function loadByPhone($phone) {
        $this->load->model('User');
        $user = $this->User->loadByPhone($phone);
        if (!$user) {
            return null;
        }

        return R::findOne('games', 'player_1 = ?', array($user->getId()));
    }

    public function loadLastN($n) {
        return R::find('games', '1=1 ORDER BY last_move_timestamp DESC LIMIT ?', array($n));
    }
}

class Model_Games extends RedBean_SimpleModel {
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPlayer1() {
        return $this->player_1;
    }

    public function setPlayer1($player1) {
        $this->player_1 = $player1;
    }

    public function getPlayer2() {
        return $this->player_2;
    }

    public function setPlayer2($player2) {
        $this->player_2 = $player2;
    }

    public function getFen() {
        return $this->fen;
    }

    public function setFen($fen) {
        $this->fen = $fen;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }

    public function getLastMoveTimestamp() {
        return $this->last_move_timestamp;
    }

    public function setLastMoveTimestamp($lastMoveTimestamp) {
        $this->last_move_timestamp = $lastMoveTimestamp;
    }
}
