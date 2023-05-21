<?php
    define('URL_BASE', 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']));
    require_once 'modelo/model.php';
    require_once 'controlador/controlador.php';
    require_once 'vista/vista.php';

    $vista = new vista();
    $controlador = new controlador();
    $vista->cabeza();
   
    if(!empty($_GET['action'])){
        $controlador->individual($_GET['action']);
       
    }else{
        
        $controlador->listar();
    }
    $vista->pie();
?>