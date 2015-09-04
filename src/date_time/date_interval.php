<?php
$datetime = new DateTime('2014-01-01 14:00:00');

// Criando intervalo de duas semanas
$interval = new DateInterval('P2W');

$datetime->add($interval);
echo $datetime->format('Y-m-d H:i:s');

echo "<br><br><br>";

$dateStart = new \DateTime();
$dateInterval = \DateInterval::createFromDateString('-1 day');
$datePeriod = new \DatePeriod($dateStart, $dateInterval, 5);
foreach ($datePeriod as $date) {
	echo $date->format('Y-m-d') . "<br>";
}
