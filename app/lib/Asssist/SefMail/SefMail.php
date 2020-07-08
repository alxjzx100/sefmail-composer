<?php
/**
 * SefMail API SDK for Asssist
 * 
 * @package Asssist
 * @subpackage Sefmail SDK
 * @since 1.1.4
 */

 namespace Asssist\SefMail;

 require_once '../../../vendor/autoload.php';

 use GuzzleHttp\Client;

 class SefMail {
     protected $baseUrl;
     protected $client;

     public function __construct($apiKey) {
         $this->baseUrl = "https://api.mail.asss.ist/?token=" . $apiKey;
         $this->newClient();
     }

     protected function newClient() {
         $this->client = new Client([
             'base_url' => $this->baseUrl
         ]);
     }
 }