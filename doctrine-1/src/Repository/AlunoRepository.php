<?php


namespace Alura\Doctrini\Repository;

use Alura\Doctrini\Entity\Aluno;
use Doctrine\ORM\EntityRepository;

class AlunoRepository extends EntityRepository
{

    public function buscaCursosPorAluno()
    {
        $query = $this->createQueryBuilder('a')
            ->join('a.telefones', 't')
            ->join('a.cursos', 'c')
            ->addSelect('t')
            ->addSelect('c')
            ->getQuery();

        /*
        $entityManager = $this->getEntityManager();

        $classeAluno = Aluno::class;
        $dql = "SELECT aluno, telefones, cursos FROM $classeAluno aluno JOIN aluno.telefones telefones JOIN aluno.cursos cursos";

        $query = $entityManager->createQuery($dql);*/
        return $query->getResult();

    }

}