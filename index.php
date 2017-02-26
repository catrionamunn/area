<?php


//include_once ('TwitterOAuth/src/TwitterOAuth.php');
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

echo "<H1>fef</h1>";
$consumer_key = 'KdeNjw8l1WChI4i0JrJSfMeK3';
$consumer_secret = '9wa6tpy0zF8e2sAgjHNDBdTBICxgxqmdvu3QjnIlRoeqt9SrPU';
$access_token = '523768045-9iaYBEglW1vTrxl7uG0sFnXRrfxAKhfygXKId4by';
$access_token_secret = 'ijRZEQ7FKjinU4xsV7J01eOxc3IaGI8GNukk5lZ7Gj3WM';

$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

$query = array (
    "q" => "Wordpress",
    "count" => 5 
);

$statuses = $connection->get();

foreach($statuses ->statuses as $status){  
echo $status->user->screen_name .":". $status->text . "<BR>";

       
    }



