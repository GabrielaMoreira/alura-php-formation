<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    // definir dados (atributos) da classe
    private static $numeroDeContas = 0;
    private static $codigoBanco = 77;

    // definir dados (atributos) dos objetos
    private $titular; //composição de objetos (classe dentro de classe)
    protected $saldo;

    // @var: int $tipo 1 = Conta Corrente; 2 = Poupança
    //private $tipo;


    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        Conta::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar)
    {

        $tarifaSaque = $valorASacar * $this->percentualTarifa();

        $valorSaque = $valorASacar + $tarifaSaque;
        if($valorSaque > $this->saldo){
            echo "saldo indisponivel";
            return;
        }

        $this->saldo -= $valorSaque;

    }

    public function deposita(float $valorADepositar): void
    {
        if($valorADepositar < 0){
            echo "Valor precisa se positivo";
            return;
        }

        $this->saldo += $valorADepositar;

    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public static function recuperaNumeroDeContas(): int
    {
        return Conta:: $numeroDeContas;
    }

    public static function recuperaCodigoDoBanco(): int
    {
        return self:: $codigoBanco;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }


    abstract protected function percentualTarifa(): float;
}
