<?php

namespace Application\Controller;

use Application\Entity;
use Entities\User;
use Silex\Application;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
     * @var Entity\UserRepository
     */
    protected $repository;
    
    public function __construct(Entity\UserRepository $userRepository)
    {
        $this->repository = $userRepository;
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
                'attr' => ['class' => 'btn btn-lg btn-link btn-block', 'value' => 1]
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
     * @param Application $app
     * @return mixed
     */
    public function getUsers(Application $app)
    {
        return $app['twig']->render('admin/users_list.twig', ['users' => $this->repository->findAll()]);
    }
}