<?php
//$datetime = new DateTime();

$datetime1 = new DateTime('2014-04-27 5:03 AM');

print_r($datetime1);

echo "<br>";

$datetime = DateTime::createFromFormat('M j, Y H:i:s', 'Jan 2, 2014 23:04:12');

$datetime3 = DateTime::createFromFormat('d/m/Y H:i:s', '23/06/1993 23:04:12');

print_r($datetime3);