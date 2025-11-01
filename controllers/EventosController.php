<?php

namespace Controllers;

use Model\Platillo;
use Model\Evento;
use MVC\Router;
use Model\Categoria;
use Intervention\Image\ImageManagerStatic as Image;

class EventosController
{


    public static function index(Router $router)
    {
        if (!is_admin()) {
            header('Location: /login');
        }
        $eventos = Evento::all();

        $router->render('admin/eventos/index', [
            'titulo' => 'Eventos',
            'eventos' => $eventos
        ]);
    }



    public static function crear(Router $router)
    {
        if (!is_admin()) {
            header('Location: /login');
        } else {
            $alertas = [];
            $evento = new Evento;
            $eventos = Platillo::all();
            $categorias = Categoria::all();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (!empty($_FILES['imagen']['tmp_name'])) {
                    $carpeta_imagenes = '../public/img/eventos';
                    if (!is_dir($carpeta_imagenes)) {
                        mkdir($carpeta_imagenes, 0755, true);
                    }
                    $imagen = Image::make($_FILES['imagen']['tmp_name'])->fit(800, 800)->encode('png', 70);
                    $nombre_imagen = md5(uniqid(rand(), true));
                    $_POST['imagen'] = $nombre_imagen;
                }
                $evento->sincronizar($_POST);
                $alertas = $evento->validar();
                if (empty($alertas)) {
                    $imagen->save($carpeta_imagenes . '/' . $nombre_imagen . ".avif");
                    $resultado = $evento->guardar();

                    if ($resultado) {
                        header('Location: /admin/eventos');
                    }
                }
            }

            $router->render('admin/eventos/crear', [
                'titulo' => 'Registrar Evento',
                'platillos' => $eventos,
                'evento' => $evento,
                'categorias' => $categorias,
                'alertas' => $alertas
            ]);
        }
    }
}
