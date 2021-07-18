<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\FlashMessageTrait;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class FormularioNovoCurso implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;
    use FlashMessageTrait;

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $html = $this->renderizaHtml('Cursos/formulario-novo-curso.php',[
            'titulo' => 'Novo curso'
        ]);
        return new Response(200,[], $html);

    }
}