<?php declare(strict_types=1); //nao converter tipo

require  'ArrayUtils.php';

$corretistas_e_compras = [
    "Giovana",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luisa",
    "12"
];

echo"<pre>";
var_dump($corretistas_e_compras);

//referencia unica encontrada e removida
ArrayUtils::remover("Maria",$corretistas_e_compras);
var_dump($corretistas_e_compras);
echo PHP_EOL;

//remove a primeira posicao
ArrayUtils::remover("NaoTem",$corretistas_e_compras);
var_dump($corretistas_e_compras);
echo PHP_EOL;

//primeiro nao encontrado
ArrayUtils::removerCheck("Giovana",$corretistas_e_compras);
var_dump($corretistas_e_compras);
echo PHP_EOL;

ArrayUtils::removerCheck2("Giovana",$corretistas_e_compras);
var_dump($corretistas_e_compras);
echo PHP_EOL;

//remove o primeiro encontrado
//ArrayUtils::remover("12",$corretistas_e_compras);
//var_dump($corretistas_e_compras);
//echo PHP_EOL;

//remove o primeiro encontrado
ArrayUtils::removerCheck3("12",$corretistas_e_compras);
var_dump($corretistas_e_compras);
echo PHP_EOL;

//fazer funcao para inteiro
//ArrayUtils::removerCheck3(12,$corretistas_e_compras);
//var_dump($corretistas_e_compras);
//echo PHP_EOL;
echo"</pre>";