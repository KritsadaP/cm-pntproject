<?php
$access_token = 'VEPSiyd0i9Cl1wuJp0KsXbQqfv0mDhQt6qGSXdxUlx4qr5qCsUAHAYbWRzeMWh9KN+/S0xzAQiyFXOku7X+kISurW4j3hcT932DmZE1EazoZF7FJrNuRnqQ3+QcDEVg0BhOxCxwESGZI2SyGdyHXVgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
