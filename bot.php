<?php
$token = "111111111:xxxxxxxxxxxxxxxxxxxxxxxxxx";
$content=file_get_contents("php://input");
$content = json_decode($content,TRUE);
$message = $content["message"]["text"];
$from = $content["message"]["from"]["id"];

if($message == '/start'){
    $response = "Hi there :) \n example bot hax.co.id";
}elseif($message == '/getid'){
    $response = "Your telegram ID is:".$from;
}elseif($message == '/getchatid') {
    $response = "Your Chat ID is:".$content["message"]["chat"]["id"];
}

$params = array(
     'chat_id'   => $content["message"]["chat"]["id"],
     'text'   =>  $response,
     'action'     => 'typing'
);

$url = 'https://api.telegram.org/bot'.$token."/sendMessage";
$ch = curl_init();
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$params);
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$result=curl_exec ($ch);
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
?>
