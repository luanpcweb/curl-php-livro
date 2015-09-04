<?php

// function enclosePerson($name){
// 	return function($doCommand) use ($name){
// 		return sprintf('%s , %s', $name, $doCommand);
// 	};
// }

// $clay = enclosePerson('Clay');

// echo $clay('get me sweet tea!') . PHP_EOL;


// Exemplo teste do Luan

// function enclosePessoa($nome){
// 	return function($paraComando) use ($nome){
// 		return sprintf('%s , %s', $nome, $paraComando);
// 	};
// }

// $result = enclosePessoa('Luan gatao');


// echo $result('resto') . PHP_EOL;


$teste = function($valor) {
	return $valor * 3.16;
};


echo $teste(10). PHP_EOL;