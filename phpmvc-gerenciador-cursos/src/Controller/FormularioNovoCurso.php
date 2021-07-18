<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;

class FormularioNovoCurso implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;

    public function processaRequisicao(): void
    {
        echo $this->renderizaHtml(
            'Cursos/formulario-novo-curso.php',
            [ 'titulo' => 'Cadastro de novo curso']);

    }
}