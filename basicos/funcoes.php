<?php

function exibeMensagem(string $mensagem)
{
	echo $mensagem . '<br>';
}

function sacarValor(float $valor, array $conta): array
{ 
	if($valor > $conta['saldo']){
		exibeMensagem("Você não pode sacar esse valor");
	}
	else{
		$conta['saldo'] -= $valor;
		exibeMensagem("Valor sacado com sucesso");
	}

	return $conta;
	
}

function depositarValor(float $valor, array $conta): array
{
	if($valor > 0){
		$conta['saldo'] += $valor;
		exibeMensagem("Valor depositado com sucesso");
	}else{
		exibeMensagem("Valor para deposito deve ser positivo");
	}
	
	return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
	$conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
	['titular' => $titular, 'saldo' => $saldo] = $conta;
	echo "<li>Titular: $titular Saldo: $saldo</li>";
}