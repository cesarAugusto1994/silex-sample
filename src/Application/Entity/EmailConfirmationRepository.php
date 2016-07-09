<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 05/07/16
 * Time: 15:23
 */

namespace Application\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Class EmailConfirmationRepository
 * @package Application\Entity
 */
class EmailConfirmationRepository extends EntityRepository
{
    /**
     * @param EmailConfirmation $email
     */
    public function save(EmailConfirmation $email)
    {
        $this->getEntityManager()->persist($email);
        $this->getEntityManager()->flush($email);
    }
}