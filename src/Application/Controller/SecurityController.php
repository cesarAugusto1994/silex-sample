<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 06/07/16
 * Time: 11:28
 */

namespace Application\Controller;


use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

/**
 * Class SecurityController
 * @package Application\Controller
 */
class SecurityController
{
    /**
     * @var Application
     */
    private $app;

    /**
     * SecurityController constructor.
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @param Request $request
     */
    public function login(Request $request)
    {
        if(empty($request)){
            return new Response('Post vazio.');
        }

        $password = md5($request->get('password'));
        $user = new UserProvider($this->app['db']);

        $userDados = $user->loadUserByEmail($request->get('email'));

        if($userDados->getPassword() == $password) {
            $token = new UsernamePasswordToken($user, $password, '', ['ROLE_USER']);
            $this->app['security']->setToken($token);
        }
exit;
        return $this->app['twig']->render('login.twig', array(
            'error'         => $this->app['security.last_error']($request),
            'last_username' => $this->app['session']->get('_security.last_username'),
        ));
    }
}