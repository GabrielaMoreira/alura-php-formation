<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\FlashMessageTrait;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Nyholm\Psr7\Response;

class FormularioEdicaoCurso implements RequestHandlerInterface
{

    use RenderizadorDeHtmlTrait;
    use FlashMessageTrait;

    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $repositorioCursos;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioCursos = $entityManager
            ->getRepository(Curso::class);
    }


    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $id = filter_var(
            $request->getQueryParams()['id'],
            FILTER_VALIDATE_INT
        );

        $resposta = new Response(302,['Location' => '/listar-curso']);

        if(is_null($id) || $id === false){
            $this->defineMensagem('danger', 'ID de curso inválido.');
            return $resposta;
        }

        $curso = $this->repositorioCursos->find($id);

        $html = $this->renderizaHtml('Cursos/formulario-novo-curso.php', [
            'curso' => $curso,
            'titulo' => 'Alterar curso: ' . $curso->getDescricao()
        ]);

        return new Response(200,[],$html);

    }
}