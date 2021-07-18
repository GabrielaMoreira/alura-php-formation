<?php

$idadeList = [21,23,19,25,41,18];
$umaIdade = $idadeList[0];

echo "tamanho da lista eh " . count($idadeList) . PHP_EOL;

for($i = 0; $i < count($idadeList); $i++){
	echo "A idade em $i eh: $idadeList[$i]" . PHP_EOL;
}