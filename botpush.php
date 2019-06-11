<?php



require "vendor/autoload.php";

$access_token = 'EZrlAI4/+ycAvZEuwWVWJ3Q75wvu+XCuJw4gv8lqjOIqzyx1be5opNj3erz+VDccSKMCgLOcgfygdB04t89/1O/w1cDnyilFU=';

$channelSecret = '';

$pushID = '';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







