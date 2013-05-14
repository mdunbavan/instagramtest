<?php

/*
|--------------------------------------------------------------------------
| Instagram
|--------------------------------------------------------------------------
|
| Instagram client details
|
*/

$config['instagram_client_name']	= 'Website images';
$config['instagram_client_id']		= 'a17f6583b9354218994357f7fb7c0534';
$config['instagram_client_secret']	= '47d276947187422e9f77b66d8068c069';
$config['instagram_callback_url']	= 'http://instacode:8888/index.php/authorize/get_code';
$config['instagram_website']		= 'http://instacode:8888/';
$config['instagram_description']	= 'Instagram like app and comment app for folk clothing';

// There was issues with some servers not being able to retrieve the data through https
// If you have this problem set the following to FALSE 
// See https://github.com/ianckc/CodeIgniter-Instagram-Library/issues/5 for a discussion on this
$config['instagram_ssl_verify']		= FALSE;