<?php

require 'funcoes.php';

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

$contasCorrentes['12345678911'] = sacarValor(500, $contasCorrentes['12345678911']);
$contasCorrentes['12345678912'] = sacarValor(500, $contasCorrentes['12345678912']);

$contasCorrentes['12345678912'] = depositarValor(900, $contasCorrentes['12345678912']);

titularComLetrasMaiusculas($contasCorrentes['12345678912']);

unset($contasCorrentes['12345678910']);

/*echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta) {
	exibeConta($conta);
	/*exibeMensagem(
		mensagem: "$cpf {$conta['titular']} {$conta['saldo']}"
	);
}
echo "</ul>";*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	<h1>Contas correntes</h1>
	<dl>
		<?php foreach($contasCorrentes as $cpf => $conta) { ?>
		<dt>
			<h3>
				<?= $conta['titular']; ?> - <?= $cpf; ?> 
			</h3>
		</dt>
		<dd>
			saldo: <?=  $conta['saldo'] ?>
		</dd>
		<?php } ?>
	</dl>
</body>
</html>