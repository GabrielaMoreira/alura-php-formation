<?php

require "vendor/autoload.php";
require  "src/Buscador.php";

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use \Alura\BuscadorDeCursos\Buscador;

$client = new Client(['verify' => false]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('https://www.alura.com.br/cursos-online-design-ux/edicao-video');


foreach ($cursos as $curso){

    echo $curso . PHP_EOL;
}


