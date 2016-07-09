<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 05/07/16
 * Time: 16:16
 */

namespace Application\Service;

use Application\Entity\EmailConfirmation;
use Application\Entity\User;
use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class EmailConfirmationService
 * @package Application\Service
 */
class EmailConfirmationService
{
    /**
     * @var Application
     */
    private $app;

    /**
     * EmailConfirmationService constructor.
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param User $user
     * @return EmailConfirmation
     */
    public function createEmailConfirmation(User $user)
    {
        $emailConfirmation = new EmailConfirmation();
        $emailConfirmation->setUser($user);
        $emailConfirmation->setEmail($user->getEmail());
        $emailConfirmation->setUuid($this->app['uuid.service']);
        $emailConfirmation->setCreated(new \DateTime('now'));
        $emailConfirmation->setStatus(true);
        
        $this->app['email.confirmation.repository']->save($emailConfirmation);
        
        return $emailConfirmation;
    }

    /**
     * @param $uuid
     * @return bool
     */
    public function confirmSubmit($uuid)
    {
        $repository = $this->app['email.confirmation.repository'];

        /**
         * EmailConfirmation $existsUuid
         */
        $existsUuid = $repository->findOneBy(['uuid' => $uuid]);
        
        if (!$existsUuid) {
            //
        }

        $existsUuid->setConfirmed(new \DateTime('now'));
        $existsUuid->setStatus(false);
        $repository->save($existsUuid);
        
        return true;
    }
}