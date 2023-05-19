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

}

function saludar(){
    echo'hola';
}

?>