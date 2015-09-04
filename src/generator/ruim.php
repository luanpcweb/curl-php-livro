<?php

function makeRange($lenght)
{
	$dataset = [];
	for($i=0; $i < $lenght; $i++)
	{
		$dataset[] = $i; 
	}

	return $dataset;
}

$customRange = makeRange(100);

foreach ($customRange as $i) {
	echo $i, PHP_EOL;
}