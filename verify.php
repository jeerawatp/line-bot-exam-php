<?php
$access_token = 'qinKiQgfB0eNNqp15Pb70ldUHjlOxICsg6TMzcl70mCPIyBe9nNOngpTRUqxpnhgxW0NmtpGH2xP/UMkx4JNUkdzDhcQaOqHapy8yfAqCElBYHhZvVqM9ri9hXn2AbkM4XuiQoJp0pCzK9rF9HY9SwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
