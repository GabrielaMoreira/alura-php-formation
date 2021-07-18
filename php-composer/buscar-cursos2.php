<?php

require "vendor/autoload.php";

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use \Alura\BuscadorDeCursos\Buscador;

$client = new Client(['verify' => false]);
$resposta = $client->request('GET','https://www.alura.com.br/cursos-online-design-ux/edicao-video');

$html = $resposta->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);


$cursos = $crawler->filter('span.card-curso__nome');


foreach ($cursos as $curso){

    echo $curso->textContent . PHP_EOL;
}


