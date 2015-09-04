<?php
try {
	include('settings.php');
	$pdo = new PDO(
          sprintf('mysql:host=%s;dbname=%s;port=%s;charset=%s',
          	$settings['host'],
          	$settings['name'],
          	$settings['port'],
          	$settings['charset']
          	),
          $settings['username'],
          $settings['password']
		);

} catch (PDOException $e) {
	echo "Data Base connection failed";
	exit();
}