<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 07/07/16
 * Time: 17:12
 */

$app->register(new \Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'dbname' => 'silex',
        'user' => 'root',
        'password' => 'mestre',
        'host' => 'localhost',
        'driver' => 'pdo_mysql',
    ),
));
$app->register(new \Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider(), array(
    'orm.proxies_dir' => __DIR__.'/../var/cache/doctrine',
    'orm.em.options' => array(
        'mappings' => array(
            array(
                'type' => 'annotation',
                'namespace' => 'Application\Entity',
                'path' => __DIR__.'/../src',
                'use_simple_annotation_reader' => false
            ),
            array(
                'type' => 'annotation',
                'namespace' => 'Application\Controller',
                'path' => __DIR__.'/../src',
                'use_simple_annotation_reader' => false
            ),
        ),
    ),
));
$app->register(new Silex\Provider\SessionServiceProvider());
$app->register(new Silex\Provider\SwiftmailerServiceProvider());
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new \Silex\Provider\ServiceControllerServiceProvider());
$app->register(new \Silex\Provider\FormServiceProvider());
$app->register(new \Silex\Provider\ValidatorServiceProvider());
$app->register(new \Silex\Provider\TranslationServiceProvider(), array(
    'translator.messages' => array(),
    'translator.domains' => array(),
));
$app->register(new \Silex\Provider\LocaleServiceProvider());
$app->register(new Silex\Provider\SessionServiceProvider());
$app["security.firewalls"] = array();
$app->register(new Silex\Provider\SecurityServiceProvider());
$app->register(new Silex\Provider\RememberMeServiceProvider());
$app->register(new Silex\Provider\HttpCacheServiceProvider(),array('http_cache.cache_dir'=>__DIR__.'/var/cache/temp/http'));

$app['security.firewalls'] = array(
    'secured_area' => array(
        'pattern' => '^/admin/$',
        'form' => array(
            'login_path' => 'admin/login',
            'check_path' => 'admin/login_check',
            "default_target_path" => "/admin/user/profile",
            "always_use_default_target_path" => true,
            'username_parameter' => 'login[username]',
            'password_parameter' => 'login[password]',
            "csrf_parameter" => "login[_token]",
            "failure_path" => "/login",
        ),
        'logout' => array(
            'logout_path' => "/admin/logout",
            "target" => '/',
            "invalidate_session" => true,
            "delete_cookies" => array(
                "mongoblog.local" => array("domain" => "mongoblog.local", "path" => "/")
            )
        ),
        'users' => function ($app) {
            return new \Application\Controller\UserProvider($app['db']);
        }
    ),
);

$app['security.access_rules'] = array(
    array('^/login$', 'IS_AUTHENTICATED_ANONYMOUSLY'),
    array('^/.+$', 'ROLE_USER')
);
$app['security.role_hierarchy'] = array(
    'ROLE_ADMIN' => array('ROLE_USER', 'ROLE_ALLOWED_TO_SWITCH'),
);
$app['security.encoder.digest'] = function () {
    return new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder('sha1', false, 1);
};
$app['security.encoder_factory'] = function ($app) {
    return new \Symfony\Component\Security\Core\Encoder\EncoderFactory(
        array(
            'Symfony\Component\Security\Core\User\UserInterface' => $app['security.encoder.digest'],
            'Entity\User' => $app['security.encoder.digest'],
        )
    );
};

$app->boot();
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
    'twig.options' => array(
        'cache' => __DIR__.'/../var/cache/twig',
        'strict_variables' => true,
    ),));

$app['swiftmailer.options'] = array(
    'driver' => 'smtp',
    'host' => 'smtp.gmail.com',
    'port' => 465,
    'username' => 'cezzaar@gmail.com',
    'password' => 'Cesar1507',
    'encryption' => 'ssl',
    'auth_mode' => null,
    'pretend' =>false
);
