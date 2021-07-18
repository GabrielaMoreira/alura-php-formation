<?php

namespace Alura;

class Calculadora
{
    public function calculaMedia(array $notas): ?float
    {
        $tamanho = sizeof($notas);
        if($tamanho > 0){
            $soma = 0;

            for($i = 0; $i < $tamanho; $i++){
                $soma += $notas[$i];
            }

            $media = ($soma)/ $tamanho;
            return $media;
        }else{
            return null;
        }

    }
}