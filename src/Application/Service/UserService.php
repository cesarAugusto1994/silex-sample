<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 05/07/16
 * Time: 16:16
 */

namespace Application\Service;

use Application\Entity\User;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

/**
 * Class UserService
 * @package Application\Service
 */
class UserService
{
    /**
     * @var Application
     */
    private $app;

    /**
     * UserService constructor.
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param Request $request
     * @return User
     */
    public function createUser(Request $request)
    {
        $encoder = $this->app['security.encoder.digest'];
        $password = $encoder->encodePassword($request->get('form')['password'], '');

        $user = new User();
        $user->setUsername($request->get('form')['name']);
        $user->setEmail($request->get('form')['email']);
        $user->setLoja(1);
        $user->setLogin($request->get('form')['email']);
        $user->setPassword($password);
        $user->setCreated(new \DateTime('now'));
        $user->setActive(true);
        try {
            $this->app['user.repository']->save($user);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
        return $user;
    }
}