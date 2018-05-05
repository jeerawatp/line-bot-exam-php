<?php
$access_token = 'LtQ9cC/RPw+Lju3CjezNCqQscG10Ykl2zMLqmHVNIeYciYmjulShzIolUFtnQeYyxW0NmtpGH2xP/UMkx4JNUkdzDhcQaOqHapy8yfAqCEncQoxKuSCZ2TcDM9oBjxNQsdrzjVKpdY/txklE9mdLiwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
