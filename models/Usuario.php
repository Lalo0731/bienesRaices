<?php

namespace Model;

class Usuario extends ActiveRecord{
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'email', 'password'];

    public $id;
    public $nombre;
    public $apellido;
    public $telefono;
    public $email;
    public $password;
    // public $passwordHash;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $password = $this->password = $args['password'] ?? '';
        $this->password = password_hash($password, PASSWORD_BCRYPT) ?? '';
        
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[] = "El Nombre es obligatorio";
        }
        if(!$this->apellido){
            self::$errores[] = "El Apellido es obligatorio";
        }
        if(!$this->email){
            self::$errores[] = "El Email es obligatorio";
        }
        if(!$this->password){
            self::$errores[] = "El Password es obligatorio";
        }

        return self::$errores;
    }

}