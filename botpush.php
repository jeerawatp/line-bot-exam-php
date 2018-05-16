<?php



require "vendor/autoload.php";

$access_token = 'LtQ9cC/RPw+Lju3CjezNCqQscG10Ykl2zMLqmHVNIeYciYmjulShzIolUFtnQeYyxW0NmtpGH2xP/UMkx4JNUkdzDhcQaOqHapy8yfAqCEncQoxKuSCZ2TcDM9oBjxNQsdrzjVKpdY/txklE9mdLiwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '022a4f3b857ac6a2daa6cd26ec614bdd';

$pushID = 'U53a0bd685f468b37ffbcd4d065afd78d';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







