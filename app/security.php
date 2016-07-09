<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 07/07/16
 * Time: 17:05
 */

use Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider;
use Silex\Application;
use Silex\Provider\DoctrineServiceProvider;

$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('Application', __DIR__.'/../src');

$app = new Application;

$app['debug'] = true;