<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class TwilioClient {
    private $client;

	public function __construct() {
		// Get Twilio
		include(APPPATH.'/third_party/twilio/Twilio.php');

        // Define API tokens
        define('ACCOUNT_SID', $_ENV['TWILIO_ACCOUNT_SID']);
        define('AUTH_TOKEN', $_ENV['TWILIO_AUTH_TOKEN']);

        $this->client = new Services_Twilio(ACCOUNT_SID, AUTH_TOKEN);
    }

    public function sendSms($from, $to, $msg) {
        return $client->account->sms_messages->create($from, $to, $msg);
    }
}
