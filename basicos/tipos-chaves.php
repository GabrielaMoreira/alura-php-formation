<?php

/* o php tenta converter a chave para um valor inteiro, entao nesses casos há sobreescrita de valores*/
$array = [
	1 => 'a',
	'1' => 'b',
	1.5 => 'c',
	true => 'd',
	'qualquercoisa' => 'teste'
];

foreach ($array as $item){
	echo $item .PHP_EOL;
}