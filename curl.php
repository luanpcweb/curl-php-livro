<?php

// URL que será gerada no site Requestb.in
$url = "http://requestb.in/1mxd5oo1";
$data = array("nome" => "Joaozinho", "email" => "Joaozinho@example.com");

$request = new HttpRequest($url, HTTP_METHOD_POST);
$request->setPostFields($data);
$request->setHeaders(array("Content-Type" => "application/json" ));

$request->send();
$result = $request->getResponseBody(); 