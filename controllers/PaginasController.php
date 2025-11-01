<?php

namespace Controllers;
use Model\Platillo;
use MVC\Router;
use Model\Categoria;
class PaginasController
{
    public static function index(Router $router)
    {


        $router->render('paginas/index', [
            'titulo' => 'Inicio'
        ]);
    }



 


    public static function sobreNosotros(Router $router)
    {


        $router->render('paginas/sobre-nosotros', [
            'titulo' => 'Sobre Nosotros'
        ]);
    }

    public static function error(Router $router)
    {


        $router->render('paginas/error', [
            'titulo' => 'Error'
        ]);
    }

    public static function platos(Router $router)
    {

        $categorias = Categoria::all();
        $platillos = Platillo::all();
        $router->render('paginas/platos', [
            'titulo' => 'Platos',
            'categorias' => $categorias,
            'platillos' => $platillos
        ]);
    }
    
    

    public static function comoFunciona(Router $router)
    {


        $router->render('paginas/como-funciona', [
            'titulo' => 'Como Funciona'
        ]);
    }

    public static function condiciones(Router $router)
    {
     
        $router->render('paginas/condiciones-de-uso', [
            'titulo' => 'Condiciones de Uso',
         
        ]);
    }


    public static function cookies(Router $router)
    {
     
        $router->render('paginas/cookies', [
            'titulo' => 'Cookies',
         
        ]);
    }

    public static function politicasPrivacidad(Router $router)
    {


        $router->render('paginas/politicas-privacidad', [
            'titulo' => 'Politicas de Privacidad'
        ]);
    }

}
