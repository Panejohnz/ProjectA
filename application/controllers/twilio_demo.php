<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 
class twilio_demo extends CI_Controller {
 
    public function index()
    {
        $data = ['phone' => '+66827867702', 'text' => 'Hello, CI'];
        print_r($this->sendSMS($data));
    }
 
    protected function sendSMS($data) {
          // Your Account SID and Auth Token from twilio.com/console
            $sid = 'ACcb24cc9f8fa61106634cbc2b64fce17a';
            $token = 'ae7dd572bc56cb81c40487db0ea38ada';
            $client = new Client($sid, $token);
            
            // Use the client to do fun stuff like send text messages!
             return $client->messages->create(
                // the number you'd like to send the message to
                $data['phone'],
                array(
                    // A Twilio phone number you purchased at twilio.com/console
                    "from" => "+your Twilio number",
                    // the body of the text message you'd like to send
                    'body' => $data['text']
                )
            );
    }
}