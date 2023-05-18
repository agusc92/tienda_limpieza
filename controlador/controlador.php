<?php
    require_once '../modelo/model.php';

    class controlador{
        private $modelo;

        function __construct(){
            $this ->modelo = new modelo();
        }
    }

?>