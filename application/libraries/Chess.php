<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Chess {
    private $chess;

	public function __construct() {
		// Get Twilio
		include(APPPATH.'/third_party/chess/Standard.php');

        $this->chess = new Games_Chess_Standard();
    }

    public function getChess() {
        return $this->chess;
    }
}
