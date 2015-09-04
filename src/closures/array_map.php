<?php

$numbersPlusOne = array_map(function ($number){
	return $number + 1;
}, [1,2,3]);

print_r($numbersPlusOne);


function incrementNumber($number){
	return $number + 1;
}

$numbersPlusOne2 = array_map('incrementNumber', [0,1,2,3]);

print_r($numbersPlusOne2);