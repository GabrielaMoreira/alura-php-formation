<?php declare(strict_types=1); //nao converter tipo


class ArrayUtils
{
    public static function remover(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array);
        unset($array[$posicao]);
    }

    //quando um elemento nao é encontrado é retornado false, e o php acaba convertendo (no unset) o false para 0
    public static function removerCheck(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array);
        if($posicao){
            unset($array[$posicao]);
        }else{
            echo "Não foi encontrado no array" . PHP_EOL;
        }
    }

    //da mesma forma que o typejugling pode converter false para zero, pode converter zero para false.
    public static function removerCheck2(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array);
        if(is_int($posicao)){
            unset($array[$posicao]);
        }else{
            echo "Não foi encontrado no array" . PHP_EOL . PHP_EOL;
        }
    }

    //verifica conteudo e o tipo (caso do elemento 12)
    public static function removerCheck3(string $elemento, array &$array)
    {
        $posicao = array_search($elemento, $array, true); // true
        if(is_int($posicao)){
            unset($array[$posicao]);
        }else{
            echo "Não foi encontrado no array" . PHP_EOL . PHP_EOL;
        }
    }

    public static function encontrarPessoaComSaldoMaior(int $saldo, array $array): array
    {
        $correntistasComSaldoMaior = array();
        foreach ($array as $chave => $valor){
            if($valor > $saldo){
                $correntistasComSaldoMaior[] = $chave;
            }
        }

        return $correntistasComSaldoMaior;
    }
}