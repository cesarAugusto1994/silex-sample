<?php
/**
 * Created by PhpStorm.
 * User: cesar
 * Date: 07/07/16
 * Time: 17:02
 */

require __DIR__.'/../app/app.php';



try {
    $app->run();
}catch (Exception $e){
    echo $e->getMessage();
}