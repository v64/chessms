<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Chessms extends CI_Controller {
    public function index() {
        $this->load->model('Game');
        $games = $this->Game->loadLastN(15);
        $gameList = array();
        foreach ($games as $game) {
            $gameList[] = array($game->getUrl(), $game->getFen());
        }

        $data = array(
            'gameList' => $gameList,
        );

        $this->template->load('chessms', $data);
    }
}
