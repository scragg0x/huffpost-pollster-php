<?php

namespace HuffPost;

class Pollster {

    public $client;

    // Response format
    public $format;

    public $base_uri = 'http://elections.huffingtonpost.com/pollster/api';

    public function __construct($format = 'json'){
        $this->client = new Guzzle\Http\Client($this->base_uri);
        $this->format = $format;
    }

    public function get($endpoint, $params = array()){
        $endpoint .= "." . $this->format;
        $req = $this->client->get($endpoint, $params)->send();
        return ($this->format == 'json') ?  $req->json() : $req->body();
    }

    public function charts($state = null, $topic = null){
        $endpoint = "/charts";
        if ($state){
            $endpoint .= "/" . $state;
        }
        else if ($topic){
            $endpoint .= "/" . $topic;
        }
        return $this->get($endpoint);
    }

    public function polls(){

    }
}