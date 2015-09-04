<?php
session_start();
try {

	//valida o email
	$email = filter_input(INPUT_POST, 'email');

	$password = filter_input(INPUT_POST, 'password');
	
} catch (Exception $e) {
	
}

