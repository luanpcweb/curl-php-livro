<?php
session_start();
try {

	$email = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'password');

	$user = User::findbyEmail($email);

	if (password_verify($password, $user->password_hash) === false) {
		throw new Exception('Invalid Password');
	}


	// Gera um hash novamente se for necessario
	$currentHashAlgorithm = PASSWORD_DEFAULT;
	$currentHashOptions = array('cost' => 15);
	
	$passwordNeedsRehash = password_needs_rehash(
		$user->password_hash,
		$currentHashAlgorithm,
		$currentHashOptions
	);
	
	if ($passwordNeedsRehash === true) {
		// Salva a nova senha
		$user->password_hash = password_hash(
			$password,
			$currentHashAlgorithm,
			$currentHashOptions
		);
		$user->save();
	}

	//salva o status de login na sessao
	$_SESSION['user_logged_in'] = 'yes';
	$_SESSION['user_email'] = $email;


	// Redireciona a pagina
	header('HTTP/1.1 302 Redirect');
	header('Location: /user-profile.php');

} catch (Exception $e) {
	header('HTTP/1.1 401 Unauthorized');
	echo $e->getMessage();
}