<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
   public function index ()
   {
    return view ('message');
   }

   public function sendmessage(Request $userInput){
      // get user input 
      $message=$userInput->messagebody;
      $number=$userInput->mobilenumber;
      // explode into array
      $arrayOfContacts = explode(",", $number);
      // dd('before explosion: '.$number,$arrayOfContacts);
      
      // send here
      $endPoint = env('MNOTIFY_SMS');
      $apiKey = env('MNOTIFY_KEY');
      $url = $endPoint . '?key=' . $apiKey;
      $data = [
         'recipient' => $arrayOfContacts,
         'sender' => env('MNOTIFY_SENDER_ID'),
         'message' => $message,
         'is_schedule' => 'false',
         'schedule_date' => ''
      ];
      // dd($data);

      $ch = curl_init();
      $headers = array();
      $headers[] = "Content-Type: application/json";
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
      $result = curl_exec($ch);
      $result = json_decode($result, TRUE);
      curl_close($ch);
    return back();
   }

}
