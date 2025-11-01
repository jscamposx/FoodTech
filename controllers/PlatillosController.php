<?php

namespace Controllers;

use Classes\Paginacion;
use Model\Platillo;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;
use Model\Categoria;

class PlatillosController
{

    public static function index(Router $router)
    {
        if (!is_admin()) {
            header('Location: /login');
            exit;
        }

        $registros_por_pagina = 8;
        $total = Platillo::total();

        $pagina_actual = 1;
        $busqueda = '';
        $mostrarPaginacion = true;

        if (isset($_GET['page'])) {
            $pagina_actual = filter_var($_GET['page'], FILTER_VALIDATE_INT);

            if ($pagina_actual === false || $pagina_actual < 1) {
                header('Location: /admin/platillos?page=1');
                exit;
            }
        } elseif (isset($_GET['search'])) {
            $busqueda = $_GET['search'];
            $platillos = Platillo::search($busqueda);


            $mostrarPaginacion = false;
            if ($busqueda === '') {
                header('Location: /admin/platillos?page=1');
            }
        } else {
            header('Location: /admin/platillos?page=1');
            exit;
        }

        $paginacion = new Paginacion($pagina_actual, $registros_por_pagina, $total);

        if ($paginacion->total_paginas() < $pagina_actual) {
            header('Location: /admin/platillos?page=1');
            exit;
        }

        if (!isset($platillos)) {
            $platillos = Platillo::paginar($registros_por_pagina, $paginacion->offset());
        }

        $router->render('admin/platillos/index', [
            'titulo' => 'Platillos',
            'platillos' => $platillos,
            'paginacion' => $mostrarPaginacion ? $paginacion->paginacion() : '' // Solo muestra la paginación si $mostrarPaginacion es true
        ]);
    }

    public static function crear(Router $router)
    {
        if (!is_admin()) {
            header('Location: /login');
        } else {
            $alertas = [];
            $platillo = new Platillo;
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                //Leer imagen
                if (!empty($_FILES['imagen']['tmp_name'])) {
                    $carpeta_imagenes = '../public/img/platillos';
                    //Crear la carpeta si no existe
                    if (!is_dir($carpeta_imagenes)) {
                        //0755 son los permisos de la carpeta
                        // y el true es para los subdir (permiso)
                        mkdir($carpeta_imagenes, 0755, true);
                    }
                    $imagen = Image::make($_FILES['imagen']['tmp_name'])->fit(400, 400)->encode(null, 80);
                    //generar nombre aleatorio a la imagen
                    $nombre_imagen = md5(uniqid(rand(), true));
                    $_POST['imagen'] = $nombre_imagen;
                }
                //Funcion para convertir un array en string
                // $_POST['redes'] = json_decode($_POST['redes'], JSON_UNESCAPED_SLASHES); el json_unescaped es para corregir los slashes (ya que usamos las redes sociales como ejemplo)
                $platillo->sincronizar($_POST);
                //validar
                $alertas = $platillo->validar();
                //Guardar el registro
                if (empty($alertas)) {
                    //Guardar la imagen
                    $imagen->save($carpeta_imagenes . '/' . $nombre_imagen . ".avif");

                    //Guardar en la BD
                    $resultado = $platillo->guardar();

                    if ($resultado) {
                        header('Location: /admin/platillos');
                    }
                }
            }

            $categorias = Categoria::all();

            $router->render('admin/platillos/crear', [
                'titulo' => 'Registrar Platillo',
                'alertas' => $alertas,
                'categorias' => $categorias,
                'platillo' => $platillo
            ]);
        }
    }


    public static function editar(Router $router)
    {
        if (!is_admin()) {
            header('Location: /login');
        } else {
            $alertas = [];
            //validar id
            $id = $_GET['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if (!$id) {
                header('Location: /admin/platillos');
            }

            //Obtener id a editar
            $platillo = Platillo::find($id);

            //si no existe el platillo
            if (!$platillo) {
                header('Location: /admin/platillos');
            }

            $platillo->imagen_actual = $platillo->imagen;

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {


                if (!empty($_FILES['imagen']['tmp_name'])) {

                    $carpeta_imagenes = '../public/img/platillos';

                    //Crear la carpeta si no existe
                    if (!is_dir($carpeta_imagenes)) {
                        mkdir($carpeta_imagenes, 0755, true);
                    }




                    $imagen = Image::make($_FILES['imagen']['tmp_name'])->fit(400, 400)->encode(null, 80);
                    //generar nombre aleatorio a la imagen
                    $nombre_imagen = md5(uniqid(rand(), true));

                    $_POST['imagen'] = $nombre_imagen;
                } else {
                    $_POST['imagen'] = $platillo->imagen_actual;
                }

                $platillo->sincronizar($_POST);

                $alertas = $platillo->validar();

                if (empty($alertas)) {
                    if (isset($nombre_imagen)) {
                        $imagen->save($carpeta_imagenes . '/' . $nombre_imagen . ".avif");
                    }

                    $resultado = $platillo->guardar();

                    if ($resultado) {
                        header('Location: /admin/platillos');
                    }
                }
            }

            $categorias = Categoria::all();
            $router->render('admin/platillos/editar', [
                'titulo' => 'Editar Platillo',
                'alertas' => $alertas,
                'categorias' => $categorias,
                'platillo' => $platillo
            ]);
        }
    }



    public static function eliminar(Router $router)
    {
        if (!is_admin()) {
            header('Location: /login');
        } else {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {


                $id = $_POST['id'];

                if (isset($platillo)) {
                    header('Location: /admin/platillos');
                }
                $platillo = Platillo::find($id);
                $resultado = $platillo->eliminar();

                if ($resultado) {
                    header('Location: /admin/platillos');
                }
            }
        }
    }
}
