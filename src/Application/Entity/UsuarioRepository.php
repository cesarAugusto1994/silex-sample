<?php

namespace Application\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Class UsuarioRepository
 * @package Application\Entity
 */
class UsuarioRepository extends EntityRepository
{
    /**
     * @param $loja
     * @param $nome
     * @param $ativo
     * @return array
     */
    public function findUser($loja, $nome, $ativo)
    {
        return $this->createQueryBuilder('u')
            ->where('u.loja = :loja')
            ->andWhere('u.username LIKE :username')
            ->andWhere('u.ativo = :ativo')
        ->setParameter('loja', $loja)
        ->setParameter('username', '%'.$nome.'%')
        ->setParameter('ativo', $ativo)
        ->getQuery()->getResult();
    }

}