<?php

namespace Controllers;


use MVC\Router;

class ConsumosController
{


    public static function index(Router $router)
    {

        if (!is_admin()) {
            header('Location: /login');
        }

        $router->render('admin/consumos/index', [
            'titulo' => 'Ordenes Semanales'
        ]);
    }
}
