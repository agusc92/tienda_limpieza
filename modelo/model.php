<?php
    class modelo{
        private $modelo;
        private $db;
        private $datos;
        public function __construct(){
            $this->modelo = array();
            $this->db = new PDO('mysql:host=localhost;dbname=db_limpiesa','root','123456');
        }

        public function traer(){
            $consulta = $this->db->prepare("SELECT * FROM productos");
            $consulta->execute();
            $this->datos[] = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $this->datos;
        }

    }
?>