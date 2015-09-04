<?php

function makeRanger($lenght)
{
	for($i=0; $i < $lenght; $i++) {
		yield $i;
	}

}


foreach (makeRanger(100000) as $i) {
	echo $i, PHP_EOL;
}