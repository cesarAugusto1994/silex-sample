<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 07/07/16
 * Time: 17:04
 */

use Symfony\Component\HttpFoundation\Request;

$app->get('/', function () use ($app) {
    return $app['twig']->render('login.twig');
});

$app->get('/login', function() use ($app) {
    return $app['twig']->render('login.twig');
})->bind('login');

$app->post('/admin/login_check', function() use($app) {
    return $app->redirect('index');
})->bind('login_check');

$app->get('/admin/logout')->bind('logout');

$app->match('/register',function (Request $request) use ($app) {
    return $app['user.controller']->createUser($request, $app);
})->bind('register');

$app->get('/forget_pass',function () use ($app) {
    return $app['twig']->render('forget_pass.twig');
})->bind('forget_pass');

$app->get('/admin/index', function() use ($app){
    return $app['twig']->render('admin/index.twig');
})->bind('index');

$app->match('/admin/users_list',function () use ($app) {
    return $app['user.controller']->getUsers();
})->bind('users_list');

$app->match('/admin/users_list/',function (Request $request) use ($app) {
    return $app['user.controller']->getUsers($request->get('loja'), $request->get('username'));
})->bind('users_list_find');


/**
 * Registro
 */

$app->get(
    '/register_sucess',
    function () use ($app) {
        return $app['twig']->render('register_sucess.twig');
    }
)->bind('register_sucess');

$app->get(
    '/email_confirmation',
    function () use ($app) {
        return $app['twig']->render('email_confirmation.twig');
    }
)->bind('email_confirmation');

$app->post(
    '/register_validator',
    function (Request $request) use ($app) {
        $app['user.controller']->createUser($request, $app);
    }
)->bind('register_validator');


$app->get(
    '/confirm_email/{uuid}',
    function ($uuid) use ($app) {
        $confirm = $app['email.confirmation.service']->confirmSubmit($uuid);
        if (!$confirm) {
            return new \Symfony\Component\HttpFoundation\Response('O codigo nao existe');
        }
        return $app['twig']->render('admin/index.twig', ['sucesso' => 'Sucesso ao confirmar o seu email.']);
    }
);

$app->get(
    '/not_found',
    function () use ($app) {
        return $app['twig']->render('404.twig');
    }
)->bind('not_found');






