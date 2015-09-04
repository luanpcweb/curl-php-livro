<?php
require 'vendor/autoload.php';

$urls = [
	'http://apple.com',
	'http://php.net',
	'http://shdgfeyads.org'
];

$scanner = new \Oreilly\ModernPHP\Url\Scanner($urls);
print_r($scanner->getInvalidUrls());