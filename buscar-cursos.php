<?php

require 'vendor/autoload.php';

Teste::modelo();
Teste2::modelo();

use Alura\Buscador\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->busca('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    exibeMensagem($curso);
}