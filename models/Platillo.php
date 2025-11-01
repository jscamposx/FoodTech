<?php


namespace Model;

class Platillo extends ActiveRecord
{
    protected static $tabla = 'platillos';
    protected static $columnasDB = ['id', 'nombre', 'tipo_platillo', 'imagen', 'descripcion'];

    public $id;
    public $nombre;
    public $tipo_platillo;
    public $descripcion;
    public $imagen;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->tipo_platillo = $args['tipo_platillo'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
    }

    public function validar()
    {
        if (!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre del platillo es Obligatorio';
        }
        if (!$this->tipo_platillo) {
            self::$alertas['error'][] = 'El tipo de platillo es Obligatorio';
        }
        if (!$this->imagen) {
            self::$alertas['error'][] = 'La imagen es Obligatoria';
        }
        if (!$this->descripcion) {
            self::$alertas['error'][] = 'La descripcion es Obligatoria';
        }




        return self::$alertas;
    }
}
