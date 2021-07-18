<?php

use Alura\Cursos\Controller\CursosEmJson;
use Alura\Cursos\Controller\CursosEmXml;
use Alura\Cursos\Controller\ExcluirCurso;
use Alura\Cursos\Controller\FormularioEdicaoCurso;
use Alura\Cursos\Controller\FormularioLogin;
use Alura\Cursos\Controller\FormularioNovoCurso;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Logout;
use Alura\Cursos\Controller\Persistencia;
use Alura\Cursos\Controller\RealizarLogin;

return [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso' => FormularioNovoCurso::class,
    '/salvar-curso' => Persistencia::class,
    '/excluir-curso' => ExcluirCurso::class,
    '/alterar-curso' => FormularioEdicaoCurso::class,
    '/login' => FormularioLogin::class,
    '/realiza-login' => RealizarLogin::class,
    '/logout' => Logout::class,
    '/buscarCursosEmJson' => CursosEmJson::class,
    '/buscarCursosEmXml' => CursosEmXml::class
];