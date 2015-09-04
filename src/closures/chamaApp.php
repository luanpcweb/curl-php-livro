<?php

include("App.php");

$app = new App();
$app->addRoute('/users/josh', function(){
	$this->responseContentType = 'application/json;charset=utf8';
	$this->responseBody = '{"name": "josh test"}';
});

$app->addRoute('/users/luan', function(){
	$this->responseContentType = 'application/json;charset=utf8';
	$this->responseBody = '{"name": "Luan gatao"}';
});

$app->dispatch('/users/luan');