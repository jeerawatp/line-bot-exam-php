<?php



require "vendor/autoload.php";


$content = file_get_contents('php://input');
$events = json_decode($content, true);
if (!is_null($events['events'])) {
	foreach ($events['events'] as $event) {
		echo = $event['userId'];
	}
	}

$access_token = 'LtQ9cC/RPw+Lju3CjezNCqQscG10Ykl2zMLqmHVNIeYciYmjulShzIolUFtnQeYyxW0NmtpGH2xP/UMkx4JNUkdzDhcQaOqHapy8yfAqCEncQoxKuSCZ2TcDM9oBjxNQsdrzjVKpdY/txklE9mdLiwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '022a4f3b857ac6a2daa6cd26ec614bdd';

$pushID = 'U71e83c556b5fbd4a05b238075dec266a';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







