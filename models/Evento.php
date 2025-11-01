<?php

namespace Model;

class Evento extends ActiveRecord
{
    protected static $tabla = 'eventosp';
    protected static $columnasDB = ['id', 'nombre', 'precio', 'descripcion', 'imagen', 'numero_platillos', 'platillos_seleccionados', 'bebidas_seleccionadas', 'otros_seleccionados'];

    public $id;
    public $nombre;
    public $precio;
    public $descripcion;
    public $imagen;
    public $numero_platillos;
    public $platillos_seleccionados;

    public $bebidas_seleccionadas;

    public $otros_seleccionados;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->numero_platillos = $args['numero_platillos'] ?? '';
        $this->platillos_seleccionados = $args['platillos_seleccionados'] ?? '';
        $this->bebidas_seleccionadas = $args['bebidas_seleccionadas'] ?? '';
        $this->otros_seleccionados = $args['otros_seleccionados'] ?? '';
    }

    // Mensajes de validación para la creación de un evento
    public function validar()
    {
        if (!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if (!$this->precio) {
            self::$alertas['error'][] = 'El precio para cada persona es Obligatorio';
        }
        if (!$this->descripcion) {
            self::$alertas['error'][] = 'La descripción es Obligatoria';
        }
        if (!$this->imagen) {
            self::$alertas['error'][] = 'La imagen es Obligatoria';
        }

        if (!$this->platillos_seleccionados) {
            self::$alertas['error'][] = 'Debe seleccionar al menos un platillo o guiso';
        }

        if (!$this->bebidas_seleccionadas) {
            self::$alertas['error'][] = 'Debes de seleccionar al menos una  bebida';
        }

        if (!$this->otros_seleccionados) {
            self::$alertas['error'][] = 'Especifica el extra que contendra tu evento';
        }

        return self::$alertas;
    }
}
