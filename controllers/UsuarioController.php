<?php

namespace Controllers;
use MVC\Router;
use Model\Usuario;

class UsuarioController{
    public static function crear(Router $router){
        $errores = Usuario::getErrores();

        $usuario = new Usuario;
       

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario =  new Usuario($_POST['usuario']);
            // debuguear($usuario);
            $errores = $usuario->validar();
    
            //No hay errores
            if(empty($errores)){
                $usuario->guardar();
            }
        }  

        $router->render('usuarios/crear',[
            'errores' => $errores,
            'usuario' => $usuario
        ]);
    }

    public static function actualizar(Router $router){
        
        $errores = Usuario::getErrores();
        $id = validarORedireccionar('/bienesRaices/public/admin');

        $usuario = Usuario::find($id);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            //Asignar los valores
            $args = $_POST['usuario'];
            debuguear($args);
            
            //Sincronizar objeto en memoria de loq ue el usuario escribio
            // $usuario->sincronizar($nombre, $apellido, $email, $password);
            $usuario->sincronizar($args);
    
            $errores = $usuario->validar();
    
            if(empty($errores)){
                $usuario->guardar();
            }
        }   

        $router->render('usuarios/actualizar',[
            'errores' => $errores,
            'usuario' => $usuario
        ]);
    }

    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $id = $_POST['id'];
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if($id){
                $tipo = $_POST['tipo'];

                if(validarTipoContenido($tipo)){
                    $vendedor = Usuario::find($id);
                    $vendedor->eliminar();
                }
            }
        }
    }
}