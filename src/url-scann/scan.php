<?php
use League\Csv\Reader;

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();

$csv = Reader::createFromPath($argv[1]);
$res = $csv->fetchAll();


foreach ($res as $csvRow) {
	try {
		$httpResponse = $client->options($csvRow[0]);

		if ($httpResponse->getStatusCode() >= 400) {
			throw new \Exception();
		}
	} catch(\Exception $e) {
		echo $csvRow[0] . PHP_EOL;
	}
}
