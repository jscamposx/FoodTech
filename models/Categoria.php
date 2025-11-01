<?php

namespace Model;

class Categoria extends ActiveRecord
{
    protected static $tabla = 'categorias';
    protected static $columnasDB = ['id', 'nombre', 'descripcion'];

    public $id;
    public $nombre;

    public $descripcion;
}
