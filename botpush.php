<?php



require "vendor/autoload.php";

$access_token = '+4eVXou/NR4uXTDUmpE0SdqDwFMOfWgUHlBDjA11FQdDi1Tzz8eQd2RWrG9T0epehMnxxo3ym5v5nIP5GlaNzJ9fXE4df5Mvk5fUreaeWoBpIBTM632ratSgI3YqRJ6N05Noo3657R69vLaoEcqtcAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '8bdcd1da660c6b0b23d47fdcf500c23a';

$pushID = 'Uf2f1f57c5e3554a925621e155e252ae0';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







