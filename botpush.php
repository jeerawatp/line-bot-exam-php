<?php

require "vendor/autoload.php";

$access_token = 'qinKiQgfB0eNNqp15Pb70ldUHjlOxICsg6TMzcl70mCPIyBe9nNOngpTRUqxpnhgxW0NmtpGH2xP/UMkx4JNUkdzDhcQaOqHapy8yfAqCElBYHhZvVqM9ri9hXn2AbkM4XuiQoJp0pCzK9rF9HY9SwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '4d93979b89f308b70acdadd9ec944f73';

$pushID = 'Uff363ec46555a2a9b1607cbaab878e08';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('ทดสอบระบบ รายงาน 1:1 (บริษัท สาครเคเบิล)');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







