<?php
try {

	//valida o email
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	if(!$email){
		throw new Exception('Invalid Email');
	}


	//valida a senha
	$password = filter_input(INPUT_POST, 'password');
	if(!$password || mb_strlen($password) < 8){
		throw new Exception('Password must contain 8+ characters');
	}

	// cria a hash da senha
	$passworHash = password_hash($password,PASSWORD_DEFAULT,['cost' => 12]);
	if ($passworHash === false) {
		throw new Exception('Password hash falied');		
	}	

	// mostra o hash
	

	echo $passworHash;


	
} catch (Exception $e) {

	header('HTTP/1.1 400 Bad Request');
	echo $e->getMessage();
	
}