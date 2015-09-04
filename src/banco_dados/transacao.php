<?php
include('settings.php');

try {
	
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

// Instruções

$stmtSubtract = $pdo->prepare('
	UPDATE accounts
	SET amount = amounts - :amounts
	WHERE name = :name
');

$stmtAdd = $pdo->prepare('
	UPDATE accounts
	SET amount = amount + :amount
	WHERE name = :name
');


// Iniciando a transação

$pdo->beginTransaction();

// faz um saque conta 1
$fromAccount = 'Checking';
$withdrawal = 50;
$stmtSubtract->bindParam(':name', $fromAccount);
$stmtSubtract->bindParam(':amount', $withdrawal, PDO::PARAM_INT);
$stmtSubtract->execute();

// realizando deposito conta 2
$toAccount = 'Savings';
$deposit = 50;
$stmtAdd->bindParam(':name', $toAccount);
$stmtAdd->bindParam(':amount' $deposit, PDO::PARAM_INT);
$stmtAdd->execute();

// Faz commit

$pdo->commint();



