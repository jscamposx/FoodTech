<?php

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class RegistradosController
{


    public static function index(Router $router)
    {

        if (!is_admin()) {
            header('Location: /login');
        }

        $users = Usuario::all();

        
        $router->render('admin/registrados/index', [
            'titulo' => 'Usuarios',
            'users' => $users
        ]);
    }


    public static function eliminar(Router $router)
    {
        if (!is_admin()) {
            header('Location: /admin/registrados');
        } else {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {


                $id = $_POST['id'];

                if (isset($usuario)) {
                    header('Location: /admin/registrados');
                }
                $usuario= Usuario::find($id);
                $resultado = $usuario->eliminar();

                if ($resultado) {
                    header('Location: /admin/registrados');
                }
            }
        }
    }
}
