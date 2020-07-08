<?php
/**
 * SefMail API SDK for Asssist
 * Mail class extends API Client
 * 
 * @package Asssist
 * @subpackage SefMail SDK
 * @since 1.1.4
 */

 namespace Asssist\SefMail\Routes;

 require_once '../../../vendor/autoload.php';

 use Asssist\SefMail\SefMail;

 class Mail extends SefMail {
     function send($from, $to, $subject, $content) {
         if(strpos($from, "<") === false || strpos($from, ">") === false) {
             throw new Exception("from field must be in the following syntax: Max Mustermann <max@mustermann.com>");
         }
         if(strpos($to, "<") !== false || strpos($to, ">") !== false) {
             throw new Exception("to field must be in the following syntax: max@mustermann.com");
         }
         $fromSplit = explode('<', $from);
         $sender_name = $fromSplit[0];
         $sender_mail = substr($fromSplit[1], 0, strlen($fromSplit[1]) - 1);
         $url = "&req=get&sender_name=" . $sender_name . "&sender_mail=" . $sender_mail . "&receiver_mail=" . $to . "&subject=" . $subject . "&content=" . $content;
         $response = $this->client->request('GET', $url);
         $body = $response->getBody();
         return json_decode($body);
     }
 }