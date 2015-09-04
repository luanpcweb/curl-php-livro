<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);


define("WWW_ROOT", dirname(__FILE__));
define("DS", DIRECTORY_SEPARATOR);


use src\Store\DocumentStore;
use src\Store\HtmlDocument;
use src\Store\StreamDocument;
use src\Store\CommandOutputDocument;


require_once ( WWW_ROOT . DS . 'autoloader.php');


$documentStore = new DocumentStore();


$htmlDoc = new HtmlDocument('http://redencao.net');
$documentStore->addDocument($htmlDoc);

$streamDoc = new StreamDocument(fopen('stream.txt','rb'));
$documentStore->addDocument($streamDoc);

$cmdDoc = new CommandOutputDocument('cat /etc/hosts');
$documentStore->addDocument($cmdDoc);

print_r($documentStore->getDocuments());    