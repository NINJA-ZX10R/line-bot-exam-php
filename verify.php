<?php
$access_token = '+4eVXou/NR4uXTDUmpE0SdqDwFMOfWgUHlBDjA11FQdDi1Tzz8eQd2RWrG9T0epehMnxxo3ym5v5nIP5GlaNzJ9fXE4df5Mvk5fUreaeWoBpIBTM632ratSgI3YqRJ6N05Noo3657R69vLaoEcqtcAdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
