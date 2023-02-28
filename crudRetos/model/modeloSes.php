<?php
    class Modelo{
        private $db;
        private $proyectos;


        public function __construct(){
            $this->db = Conectar::conexion();
            $this->proyectos= array();
        }

        public function verificar($post){
            $nombre = $post["nombre"];
            $clave = $post["clave"];

            $sql=("SELECT COUNT('id') as sesion FROM profesores WHERE nombre='".$nombre."' AND password='".$clave."';");
            $consulta= $this->db->query($sql);
           

            return $consulta->fetch_assoc();
        }


    }

?>