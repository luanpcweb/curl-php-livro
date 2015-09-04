<?php

//gera tres datas com intervalo de duas semanas
$start = new DateTime();
$interval = new DateInterval('P2W');
$period = new DatePeriod($start, $interval, 3);
foreach ($period as $nextDateTime) {
 	echo $nextDateTime->format('Y-m-d H:i:s')."<br>";
} 


echo "<br><br><br>";

$start = new DateTime();
$interval = new DateInterval('P2W');
$period = new DatePeriod(
	$start,
	$interval,
	3,
	DatePeriod::EXCLUDE_START_DATE
);

foreach ($period as $nextDateTime) {
	echo $nextDateTime->format('Y-m-d H:i:s'). "<br>";
}