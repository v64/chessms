<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class RedBean {
	function __construct() {
		// Include database configuration
		include(APPPATH.'/config/database.php');

		// Get Redbean
		include(APPPATH.'/third_party/rb.php');

		// Database data
		$host = $db[$active_group]['hostname'];
		$user = $db[$active_group]['username'];
		$pass = $db[$active_group]['password'];
		$db = $db[$active_group]['database'];

		// Setup DB connection
		R::setup("pgsql:host=$host;dbname=$db", $user, $pass);

        // Disallow changing the database schema
        R::freeze(true);
	}
}
