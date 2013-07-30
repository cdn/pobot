#!/bin/env php
<?php

require_once '/path/to/EZAppDotNet.php';
$app = new EZAppDotNet();

$app = new AppDotNet($app_clientId,$app_clientSecret);

try {
 $app->getAppAccessToken();
} catch(AppDotNetException $x) {

$app = new AppDotNet($app_clientId,$app_clientSecret);

try {
 $app->getAppAccessToken();
} catch(AppDotNetException $x) {

}

function saveObject($obj) {

echo $obj['data']['id'] . ':' . $obj['data']['user']['username'] . "\n";

$token = array();

$token['4900'] = '';

//if($obj['data']['user']['id'] == '4900') {

echo $obj['data']['text'] . "\n";

if(key_exists('text', $obj['data']) && $obj['data']['text'][0] != '@') {
  if(key_exists('repost_of', $obj['data']))
    $obj['data']['id'] = $obj['data']['repost_of']['id'];
  exec(dirname(__FILE__) . '/repost.py ' . $obj['data']['id'] . ' ' . $token[$obj['data']['user']['id']] . '', $o);
 // || php ; post_id and token? id to get token
  echo "{$o[0]}\n";
}

//} // if (a)po

} // function


$app->registerStreamFunction('saveObject');

$s = 'https://stream-channel.app.net/channel/1/';

try {

$app->openStream($s);

} catch(AppDotNetException $x) {

}
