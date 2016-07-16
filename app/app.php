<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 07/07/16
 * Time: 17:04
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

use Silex\Application;
use Whoops\Run;

$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->add('Application', __DIR__ . '/../src');

$whoops = new Run();
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$app = new Application;

$app['debug'] = true;
$app['application.name'] = 'Silex';

require __DIR__ . '/providers.php';
/*
$locator = new \Symfony\Component\Config\FileLocator(__DIR__.'/routes.yml');
$loader = new \Symfony\Component\Routing\Loader\YamlFileLoader($locator);

$app['routtes'] = $loader->load('');
*/
require __DIR__ . '/routes.php';
require __DIR__ . '/services.php';

return $app;
