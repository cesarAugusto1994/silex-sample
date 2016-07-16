<?php

namespace Application\Controller;

use Application\Entity;
use Silex\Application;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormFactoryBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 04/07/16
 * Time: 11:24
 */

/**
 * Class UserController
 * @package Application\Controller
 */
class UserController
{
    /**
     * @var Entity\User
     */
    protected $repository;
    
    private $app;
    
    public function __construct(Entity\UserRepository $userRepository, Application $app)
    {
        $this->repository = $userRepository;
        $this->app = $app;
    }

    /**
     * @param Request $request
     * @param Application $app
     * @var FormFactoryBuilder $form
     * @return mixed
     */
    public function createUser(Request $request, Application $app)
    {
        $form = $app['form.factory']->createBuilder(FormType::class)
        ->add('name', TextType::class, [
            'required' => true,
            'constraints' => [new Assert\NotBlank(), new Assert\Length([
                'min' => 5, 'minMessage' => 'Seu Nome deve possuir mais de {{ limit }} caracteres.',
                'max' => 30, 'maxMessage' => 'Seu Nome deve possuir menos de {{ limit }} caracteres.'])],
            'attr' => array('class' => 'form-control', 'placeholder' => 'Your Name')
        ])->add('email', EmailType::class, [
            'required' => true,
            'constraints' => [new Assert\Email(), new Assert\Length(['min' => 6])],
            'attr' => array('class' => 'form-control', 'placeholder' => 'Your E-mail')
        ])->add('password', PasswordType::class, [
            'required' => true,
            'constraints' => [new Assert\NotBlank(), new Assert\Length([
                'min' => 6, 'minMessage' => 'Sua Senha deve possuir mais de {{ limit }} caracteres.',])],
            'attr' => array('class' => 'form-control', 'placeholder' => 'Your Password')
        ])->add('save', SubmitType::class, [
                'attr' => ['class' => 'btn btn-primary btn-block btn-flat', 'value' => 1]
            ]
        )->getForm();
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $email = $app['user.repository']->findBy(['email' => $request->get('form')['email']]);

            if($email){
               return $app['twig']->render('register.twig', ['error' => 'O E-mail ja esta cadastrado.', 'form' => $form->createView()]);
            }

            $user = $app['user.service']->createUser($request);
            $app['email.confirmation.service']->createEmailConfirmation($user);
            $app['user.email.service']->send($request->get('form')['email'], $app);

            return $app['twig']->render('/admin/index.twig', ['sucesso' => 'Cadastro Efetivado.']);
        }

        return $app['twig']->render('register.twig', ['form' => $form->createView()]);
    }

    /**
     * @param Request $request
     */
    public function updateUser($id, Request $request)
    {
        /**
         * User $user
         */
        $user = $this->app['user.repository']->find($id);

        $user->setUsername($request->get('username'));
        $user->setEmail($request->get('email'));
        $user->setLogin($request->get('login'));
        $user->setLoja($request->get('loja'));

        $this->app['user.repository']->save($user);

        return $this->app->redirect('/profile/'.$id);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function loginCheck(Request $request)
    {
        $user = $this->app['user.repository']->findBy(['email' => $request->get('_username')]);

        if (!$user) {
            return $this->app['twig']->render('login.twig',['error' => 'Usuario nao encontrado.']);
        }

        $this->app['session']->set('user', array('user' => $user[0]));

        //$this->app['breadcrumbs']->addItem('A simple route',array('route' => 'simple_named_route'));

        return $this->app['twig']->render('/admin/index.twig', ['nome_aplicacao' => $this->app['application.name']]);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getUserProfile($id)
    {
        $user = $this->app['user.repository']->find($id);

        if (!$user) {
            return $this->app['twig']->render('/admin/index.twig', ['error' => 'Usuario nao encontrado.']);
        }

        return $this->app['twig']->render(
            '/users/profile.twig',
            [
                'user' => $user,
                'lojas' => $this->app['loja.repository']
            ]
        );
    }

    /**
     * @return null|object
     */
    public function getUsers($loja = 2, $name = '')
    {
        return $this->app['twig']->render('admin/users_list.twig', 
            [
                'users' => $this->repository->findUser($loja, $name, true), 
                'lojas' => $this->app['loja.repository'],
                'loja_request' => filter_input(INPUT_GET, 'loja'),
                'nome_request' => filter_input(INPUT_GET, 'nome'),
                'login_request' => filter_input(INPUT_GET, 'login'),
            ]);
    }
}