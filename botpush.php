<?php



require "vendor/autoload.php";

$access_token = 'VEPSiyd0i9Cl1wuJp0KsXbQqfv0mDhQt6qGSXdxUlx4qr5qCsUAHAYbWRzeMWh9KN+/S0xzAQiyFXOku7X+kISurW4j3hcT932DmZE1EazoZF7FJrNuRnqQ3+QcDEVg0BhOxCxwESGZI2SyGdyHXVgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '1f5365c06cccc2c3687e095ae303f0fe';

$pushID = 'Ub3d8546f4974779e5a938055a2642f24';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







