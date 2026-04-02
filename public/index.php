<?php

require_once '../app/core/Router.php';

use App\Core\Router;

$router = new Router();

//Register Routes
$router->add('GET','/students', 'StudentController', 'index');
$router->add('Get','/students/create', 'StudentController', 'create');
$router->add('Get','/students/(id)', 'StudentController', 'show');

$router->run();

?>