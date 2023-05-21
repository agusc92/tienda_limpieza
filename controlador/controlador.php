<?php
    require_once 'modelo/model.php';
    require_once 'vista/vista.php';
    class controlador{
        private $modelo;
        private $vista;

        function __construct(){
            $this->modelo = new modelo();
            $this->vista = new vista();
        }

        function cabeza(){
           $this->vista->cabeza();
           echo ' hola';
        }
        function listar(){
           $datos = $this->modelo->traer();
          
           $this ->vista->lista($datos[0]);
        }
        function individual($id){
            $datos = $this->modelo->traerUno($id);
            $this->vista->mostrarProducto($datos[0]);
        }
    }

?>