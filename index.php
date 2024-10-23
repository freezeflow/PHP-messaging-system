<?php
use App\router\router;
require __DIR__ .'/vendor/autoload.php';

define('VIEW_PATH', __DIR__.'/app/views/');

$router = new router();
$router->register('/', [App\controllers\loginController::class, 'index'])
        ->register('/register', [App\controllers\registerController::class, 'index']);

try{
    echo $router->resolve($_SERVER['REQUEST_URI']);
} catch(Exception $e){
    echo $e->getMessage();
}
