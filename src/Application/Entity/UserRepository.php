<?php

/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 04/07/16
 * Time: 11:34
 */
namespace Application\Entity;

use Application\Entity;
use Doctrine\ORM\EntityRepository;

/**
 * Class UserRepository
 * @package Application\Repository
 */
class UserRepository extends EntityRepository
{
    /**
     * @param Entity\User $user
     */
    public function save(Entity\User $user)
    {
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush($user);
    }

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
            ->andWhere('u.active = :active')
            ->setParameter('loja', $loja)
            ->setParameter('username', '%'.$nome.'%')
            ->setParameter('active', $ativo)
            ->getQuery()->getResult();
    }
}