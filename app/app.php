<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 07/07/16
 * Time: 17:04
 */

use Silex\Application;

$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('Application', __DIR__.'/../src');

$app = new Application;

$app['debug'] = true;

require __DIR__.'/providers.php';
require __DIR__.'/routes.php';
require __DIR__.'/services.php';

return $app;
