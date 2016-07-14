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

require __DIR__ . '/providers.php';
require __DIR__ . '/routes.php';
require __DIR__ . '/services.php';

return $app;
