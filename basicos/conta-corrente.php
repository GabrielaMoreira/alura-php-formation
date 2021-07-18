<?php

/*
$conta1 = [
	'titular' => 'vinicios',
	'saldo' => 1000
];

$conta2 = [
	'titular' => 'maria',
	'saldo' => 10000
];

$conta3 = [
	'titular' => 'roberto',
	'saldo' => 300
];

$contasCorrentes = [
	12345678910 => $conta1,
	12345678911 => $conta2,
	12345678912 => $conta3
];

for ($i = 0; $i < count($contasCorrentes); $i++){
	echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
*/

$contasCorrentes = [
	12345678910 => [
		'titular' => 'vinicios',
		'saldo' => 1000
	],
	12345678911 => [
		'titular' => 'maria',
		'saldo' => 10000
	],
	12345678912 => [
		'titular' => 'roberto',
		'saldo' => 300
	]
];

$contasCorrentes[12345678913] = [
	'titular' => 'claudia',
	'saldo' => 2000
];

foreach ($contasCorrentes as $conta) {
	echo $conta['titular'] . PHP_EOL;
}

echo PHP_EOL;

foreach ($contasCorrentes as $cpf =>  $conta) {
	echo $cpf . PHP_EOL;
}

echo PHP_EOL;

echo $contasCorrentes[12345678913]['titular'];