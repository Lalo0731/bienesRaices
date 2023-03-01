<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PropiedadController;
use Controllers\VendedorController;
use Controllers\PaginasController;

$router = new Router();

$router->get('/bienesRaices/public/admin', [PropiedadController::class, 'index']);
$router->get('/bienesRaices/public/propiedades/crear', [PropiedadController::class, 'crear']);
$router->post('/bienesRaices/public/propiedades/crear', [PropiedadController::class, 'crear']);
$router->get('/bienesRaices/public/propiedades/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/bienesRaices/public/propiedades/actualizar', [PropiedadController::class, 'actualizar']);
$router->post('/bienesRaices/public/propiedades/eliminar', [PropiedadController::class, 'eliminar']);

//Vendedores
$router->get('/bienesRaices/public/vendedores/crear', [VendedorController::class, 'crear']);
$router->post('/bienesRaices/public/vendedores/crear', [VendedorController::class, 'crear']);
$router->get('/bienesRaices/public/vendedores/actualizar', [VendedorController::class, 'actualizar']);
$router->post('/bienesRaices/public/vendedores/actualizar', [VendedorController::class, 'actualizar']);
$router->post('/bienesRaices/public/vendedores/eliminar', [VendedorController::class, 'eliminar']);

$router->get('/bienesRaices/public/', [PaginasController::class, 'index']);
$router->get('/bienesRaices/public/nosotros', [PaginasController::class, 'nosotros']);
$router->get('/bienesRaices/public/propiedades', [PaginasController::class, 'propiedades']);
$router->get('/bienesRaices/public/propiedad', [PaginasController::class, 'propiedad']);
$router->get('/bienesRaices/public/blog', [PaginasController::class, 'blog']);
$router->get('/bienesRaices/public/entrada', [PaginasController::class, 'entrada']);
$router->get('/bienesRaices/public/contacto', [PaginasController::class, 'contacto']);
$router->post('/bienesRaices/public/contacto', [PaginasController::class, 'contacto']);

$router->comprobarRutas();