<?php
$ip = $_SERVER['REMOTE_ADDR'];
$response = array('ip' => $ip);
header('Content-Type: application/json');
echo json_encode($response);
?>