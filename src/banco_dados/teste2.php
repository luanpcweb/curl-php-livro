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

     $sql = 'SELECT * FROM usuarios WHERE username = :user';
     $statement = $pdo->prepare($sql);

     //$user = filter_input(INPUT_GET, 'user');
     $user = "luan";
     $statement->bindValue(':user', $user, PDO::PARAM_INT);
     $statement->execute();

     // while(($email = $statement->fetchColumn(1)) !== false){
     //      echo $email;
     // }


     while(($result = $statement->fetchObject()) !== false){
          echo $result->passw;
     }

} catch (PDOException $e) {
	echo "Data Base connection failed";
	exit();
}