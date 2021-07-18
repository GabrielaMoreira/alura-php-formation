<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Alura\Cursos\Infra\EntityManagerCreator;

class FormularioEdicaoCurso implements InterfaceControladorRequisicao
{

    use RenderizadorDeHtmlTrait;

    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $repositorioCursos;

    public function __construct()
    {
        $entityManger = (new EntityManagerCreator())
            ->getEntityManager();
        $this->repositorioCursos = $entityManger
            ->getRepository(Curso::class);
    }


    public function processaRequisicao(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if(is_null($id) || $id === false){
            header('Location: /listar-cursos');
            return;
        }

        $curso = $this->repositorioCursos->find($id);
        echo $this->renderizaHtml(
            'Cursos/formulario-novo-curso.php', [
                'curso' => $curso,
                'titulo' => 'Alterar curso: ' . $curso->getDescricao()
            ]);

    }
}