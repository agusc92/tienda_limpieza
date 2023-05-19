<?php
    require_once 'modelo/model.php';
    require_once 'controlador/controlador.php';
    require_once 'vista/vista.php';

    $vista = new vista();

    $vista->cabeza();
    $vista->pie();
?>