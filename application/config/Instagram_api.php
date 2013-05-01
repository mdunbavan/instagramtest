<?php

/*
|--------------------------------------------------------------------------
| Instagram
|--------------------------------------------------------------------------
|
| Instagram client details
|
*/

$config['instagram_client_name']	= 'folkagram';
$config['instagram_client_id']		= 'b40ecbefe74a43578b216c251ff9a898';
$config['instagram_client_secret']	= 'a2111c19ca0d440d8b7e078fd407c54f';
$config['instagram_callback_url']	= 'http://www.markdunbavan.co.uk/instagram/instacode/';
$config['instagram_website']		= 'http://www.markdunbavan.co.uk/instagram/instacode/';
$config['instagram_description']	= 'Instagram like app and comment app for folk clothing';

// There was issues with some servers not being able to retrieve the data through https
// If you have this problem set the following to FALSE 
// See https://github.com/ianckc/CodeIgniter-Instagram-Library/issues/5 for a discussion on this
$config['instagram_ssl_verify']		= FALSE;