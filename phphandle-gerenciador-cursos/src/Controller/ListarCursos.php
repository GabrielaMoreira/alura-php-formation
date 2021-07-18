<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;



class ListarCursos implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;

    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $repositorioDeCursos;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioDeCursos = $entityManager
            ->getRepository(Curso::class);
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {

        $cursos = $this->repositorioDeCursos->findAll();
        $html = $this->renderizaHtml(
            'Cursos/listar-curso.php',
            [
                'cursos' => $cursos,
                'titulo' => 'Lista de cursos'
            ]);

        return new Response(200, [], $html);
    }
}