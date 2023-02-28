<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PropiedadController;

$router = new Router();

$router->get('/bienesRaices/public/admin', [PropiedadController::class, 'index']);
// $router->get('/admin?resultado=1',[PropiedadController::class,'index']);
$router->get('/bienesRaices/public/propiedades/crear', [PropiedadController::class, 'crear']);
$router->post('/bienesRaices/public/propiedades/crear', [PropiedadController::class, 'crear']);
$router->get('/bienesRaices/public/propiedades/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/bienesRaices/public/propiedades/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/bienesRaices/public/propiedades/eliminar', [PropiedadController::class, 'eliminar']);

$router->comprobarRutas();