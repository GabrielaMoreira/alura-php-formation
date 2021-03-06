<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\FormularioNovoCurso;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;
use Alura\Cursos\Controller\InterfaceControladorRequisicao;

$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}

//chamar session antes de qualquer saida como echo, etc
session_start();

$ehRotaDeLogin = stripos($caminho,'login');
if(!isset($_SESSION['logado']) && $ehRotaDeLogin === false){
    header('Location: /login');
    exit();
}

$classeControladora = $rotas[$caminho];

/**
 * @var InterfaceControladorRequisicao $controlador
 */
$controlador = new $classeControladora();
$controlador->processaRequisicao();

/*
switch ($_SERVER['PATH_INFO']){

    case '/listar-cursos' :
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();
    break;

    case '/novo-curso' :
        $controlador = new FormularioNovoCurso();
        $controlador->processaRequisicao();
    break;

    case '/salvar-curso' :
        $controlador = new Persistencia();
        $controlador->processaRequisicao();
    break;

    default:

    break;
}
*/