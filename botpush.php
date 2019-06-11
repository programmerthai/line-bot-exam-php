<?php



require "vendor/autoload.php";

$access_token = 'EZrlAI4/lZhitJ0wg9Xu3bAFdDLzUkH1pd36sJ4uYwpEAimH9nacWEcNQtmKvIJ09EliE1jlCB70a69ST6+ycAvZEuwWVWJ3Q75wvu+XCuJw4gv8lqjOIqzyx1be5opNj3erz+VDccSKMCgLOcgfygdB04t89/1O/w1cDnyilFU=';

$channelSecret = '4a267af1e5f37eeae660aa807e3f3bfc';

$pushID = 'U3a03cacbced3254076884a836fcb0dda';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







