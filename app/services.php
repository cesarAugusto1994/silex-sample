<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 07/07/16
 * Time: 17:05
 */

/**
 * Repositories
 */
$app['user.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\Application\Entity\User::class);
};

$app['email.confirmation.repository'] = function () use ($app) {
    return $app['orm.em']->getRepository(\Application\Entity\EmailConfirmation::class);
};

$app['loja.repository'] = function() {
    return range(1, 60);
};

/**
 * Controllers
 */
$app['user.controller'] = function ($app) {
    return new \Application\Controller\UserController($app['user.repository'], $app);
};

$app['security.controller'] = function () use ($app) {
    return new \Application\Controller\SecurityController($app);
};

/**
 * Services
 */
$app['user.service'] = function () use ($app){
    return new \Application\Service\UserService($app);
};

$app['email.confirmation.service'] = function () use ($app){
    return new \Application\Service\EmailConfirmationService($app);
};

$app['user.email.service'] = function() use ($app){

    $assunto = 'Bem Vindo Ao site';
    $from = 'cezzaar@gmail.com';
    $body = $app['twig']->render('email_confirmation.twig', ['body' => 'Bem Vindo', 'uuid' => $app['uuid.service']]);

    return new \Application\Service\EmailService($assunto, $from, $body);
};

$app['uuid.service'] = function(){
    return Ramsey\Uuid\Uuid::uuid4();
};