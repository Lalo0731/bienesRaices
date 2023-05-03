<?php

namespace Model;

class Propiedad extends ActiveRecord{
    protected static $tabla = 'propiedades';
    protected static $columnasDB = ['id','titulo', 'tipo', 'clave', 'precio', 'imagen', 'descripcion', 'cercano', 'ubicacion', 'habitaciones', 'wc', 'estacionamiento', 'creado', 'vendedores_id'];

    public $id;
    public $titulo;
    public $tipo;
    public $precio;
    public $clave;
    public $imagen;
    public $descripcion;
    public $cercano;
    public $ubicacion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedores_id;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->tipo = $args['tipo'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->clave = $args['clave'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->cercano = $args['cercano'] ?? '';
        $this->ubicacion = $args['ubicacion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado = date('Y/m/d');
        $this->vendedores_id = $args['vendedores_id'] ?? '';
    }

    public function validar(){
        if(!$this->titulo){
            self::$errores[] = "Debes añadir un titulo";
        }

        if(!$this->tipo){
            self::$errores[] = "Debes seleccionar un tipo Renta o Venta";
        }

        if(!$this->clave){
            self::$errores[] = "La clave es obligatorio";
        }

        if(!$this->precio){
            self::$errores[] = "El precio es Obligatorio";
        }

        if(strlen( $this->descripcion ) < 50 ){
            self::$errores[] = "La descripción es obligatoria y debe tener al menos 50 caracteres";
        }

        if(strlen( $this->descripcion ) < 10 ){
            self::$errores[] = "La ubicación es obligatoria";
        }

        if(!$this->habitaciones){
            self::$errores[] = "El número de habitaciones es obligatorio";
        }

        if(!$this->wc){
            self::$errores[] = "El número de baños es obligatorio";
        }

        if(!$this->estacionamiento){
            self::$errores[] = "El número de lugares de estacionamiento es obligatorio";
        }

        if(!$this->vendedores_id){
            self::$errores[] = "Elige un vendedor";
        }

        if(!$this->imagen){
            self::$errores[] = "La imagen de la propiedad es obligatoria";
        }

        return self::$errores;

    }

    public function filtrarPropiedades($type)
    {
        if($type != "") {
            $query = "SELECT * FROM propiedades WHERE tipo = '".$type."'";
            $resultado = self::$db->query($query);
            $propiedades = [];
            while($registro = $resultado->fetch_assoc()){
                $objeto = new Propiedad;
                foreach($registro as $key => $value){
                    if(property_exists( $objeto, $key )){
                        $objeto->$key = $value;
                    }
                }
                $propiedades[] = $objeto;
            }
  
       }else {
            $propiedades = Propiedad::all();
       }
       return $propiedades;
    }
}

?>