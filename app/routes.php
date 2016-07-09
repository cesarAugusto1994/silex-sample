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

$app->match('/admin/users_list',
    function () use ($app) {
        return $app['user.controller']->getUsers($app);
    }
)->bind('users_list');




