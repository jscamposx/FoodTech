<?php

namespace Controllers;
use Model\Evento;
use Model\Platillo;
use MVC\Router;
use Model\Usuario;
class DashboardController
{


    public static function index(Router $router)
    {

        if (!is_admin()) {
            header('Location: /login');
        }
        

        $platillos = Platillo::total();
        $users = Usuario::total();
        $eventos = Evento::total();
        $router->render('admin/dashboard/index', [
            'titulo' => 'Panel de Administracion',
            'platillos' => $platillos,
            'users' => $users,
            'eventos' => $eventos
        ]);
    }
}
