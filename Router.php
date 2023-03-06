<?php

namespace MVC;

class Router{

    public $rutasGET = [];
    public $rutasPOST = [];

    public function get($url, $fn){
        $this->rutasGET[$url] = $fn;
    }

    public function post($url, $fn){
        $this->rutasPOST[$url] = $fn;
    }

    public function comprobarRutas(){

        session_start();
        $auth = $_SESSION['login'] ?? null;
   
        //Arreglo de rutas protegidas
        $rutas_protegidas = ['/bienesRaices/public/admin','/bienesRaices/public/propiedades/crear',
                            '/bienesRaices/public/propiedades/actualizar','/bienesRaices/public/propiedades/eliminar',
                            '/bienesRaices/public/vendedores/crear','/bienesRaices/public/vendedores/actualizar', 
                            '/bienesRaices/public/vendedores/eliminar'];

        $urlActual = $_SERVER['REQUEST_URI'] ?? '/';
        $metodo = $_SERVER['REQUEST_METHOD'];
        
        if($metodo === 'GET'){
            $urlActual = explode('?',$urlActual)[0];
            $fn = $this->rutasGET[$urlActual] ?? null;
        } else{
            $urlActual = explode('?',$urlActual)[0];
            $fn = $this->rutasPOST[$urlActual] ?? null;
        }

        //Proteger las rutas
        if(in_array($urlActual, $rutas_protegidas) && !$auth){
            header('location: /bienesRaices/public');
        }

        if($fn){
            // debuguear($this);
            call_user_func($fn, $this);
        } else{
            echo "Página No encontrada";
        }
    }

    public function render($view, $datos = []){

        foreach($datos as $key => $value){
            $$key = $value;
        }

        ob_start();
        include __DIR__ . "/views/$view.php";
        $contenido = ob_get_clean();
        include __DIR__ . "/views/layout.php";
    }
}