<?php

require 'smarty/libs/Smarty.class.php';
class vista{
    

    private $smarty;
    function __construct(){
        $this->smarty = new Smarty();
    }

    function cabeza(){
        // require_once 'cabeza.php';
        $this->smarty->display('vista/tenplates/cabeza.tpl');
    }
    
     function pie(){
        $this->smarty->display('vista/tenplates/footer.tpl');
    }
    function lista($arr){
        $this->smarty ->assign('dato',$arr);
        $this->smarty -> display('vista/tenplates/lista.tpl');
    }
    function mostrarProducto($arr){
        $this->smarty->assign('producto',$arr);
        $this->smarty->assign('home',URL_BASE);
        $this->smarty->display('vista/tenplates/individual.tpl');
       
    }

}


?>