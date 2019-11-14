<?php defined('BASEPATH') OR exit('No direct script access allowed');


use Twilio\Rest\Client;

class Tec_twilio
{
    public function __construct($config)
    {
        $sid = $config['sid'];
        $token = $config['token'];
        $this->client = new Client($sid, $token);
    }

    public function send($to, $from, $body)
    {
        $this->client->messages->create($to, ['from' => $from, 'body' => $body]);
    }
}
