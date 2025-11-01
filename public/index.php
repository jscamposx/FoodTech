<?php 
error_reporting(E_ALL & ~E_DEPRECATED);

require_once __DIR__ . '/../includes/app.php';

use Controllers\APIPlatillos;
use MVC\Router;
use Controllers\AuthController;
use Controllers\ConsumosController;
use Controllers\DashboardController;
use Controllers\EventosController;
use Controllers\PaginasController;
use Controllers\PlatillosController;

use Controllers\RegistradosController;

$router = new Router();
 

// Login
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);


// Crear Cuenta
$router->get('/registro', [AuthController::class, 'registro']);
$router->post('/registro', [AuthController::class, 'registro']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/restablecer', [AuthController::class, 'restablecer']);
$router->post('/restablecer', [AuthController::class, 'restablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);

// Area de administracion
$router->get('/admin/consumos', [ConsumosController::class, 'index']);

$router->get('/admin/dashboard', [DashboardController::class, 'index']);

$router->get('/admin/eventos', [EventosController::class, 'index']);
$router->get('/admin/eventos/crear', [EventosController::class, 'crear']);
$router->post('/admin/eventos/crear', [EventosController::class, 'crear']);

$router->get('/admin/platillos', [PlatillosController::class, 'index']);


$router->get('/admin/platillos/crear', [PlatillosController::class, 'crear']);
$router->post('/admin/platillos/crear', [PlatillosController::class, 'crear']);
$router->get('/admin/platillos/editar', [PlatillosController::class, 'editar']); //get
$router->post('/admin/platillos/editar', [PlatillosController::class, 'editar']); //post
$router->post('/admin/platillos/eliminar', [PlatillosController::class, 'eliminar']); //post

$router->post('/api/platillos', [APIPlatillos::class, 'index']);

$router->get('/admin/registrados', [RegistradosController::class, 'index']);

$router->post('/admin/registrados/eliminar', [RegistradosController::class, 'eliminar']); //post


// Área Pública
$router->get('/',  [PaginasController::class, 'index']);
$router->get('/platos',  [PaginasController::class, 'platos']);
$router->get('/como-funciona', [PaginasController::class, 'comoFunciona']);
$router->get('/cookies',  [PaginasController::class, 'cookies']);
$router->get('/politicas-de-privacidad', [PaginasController::class, 'politicasPrivacidad']);
$router->get('/condiciones-de-uso', [PaginasController::class, 'condiciones']);

$router->get('/sobre-nosotros',  [PaginasController::class, 'sobreNosotros']);
$router->get('/404', [PaginasController::class, 'error']);

$router->comprobarRutas();