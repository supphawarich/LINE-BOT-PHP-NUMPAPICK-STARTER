 <?php
  

function send_LINE($msg){
 $access_token = 'ZO5quYrOa3egCUMEUs2YiTn5VCUvqlfuufPCPfPHqfk0OisIELwlY8EPpAipzRQJSP/tKogHL1YP4XqqwnAdlha4ei6ZZKlvlgmzlsudB42+pgpZ4qWgJLWhtEHBYtcMxdiqhRRVeB8rwP+3eTTnMQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ud8529c85198d15b0c6b046d627c9a55b',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
