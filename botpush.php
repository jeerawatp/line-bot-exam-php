<?php

require "vendor/autoload.php";

$access_token = 'LtQ9cC/RPw+Lju3CjezNCqQscG10Ykl2zMLqmHVNIeYciYmjulShzIolUFtnQeYyxW0NmtpGH2xP/UMkx4JNUkdzDhcQaOqHapy8yfAqCEncQoxKuSCZ2TcDM9oBjxNQsdrzjVKpdY/txklE9mdLiwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '022a4f3b857ac6a2daa6cd26ec614bdd';

$pushID = 'Udf7737e11025b4cc7688157c97625491';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('ผมรักพี่คนเดียวน่ะครับพี่ฝ้าย ยอดดวงใจของผม');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







