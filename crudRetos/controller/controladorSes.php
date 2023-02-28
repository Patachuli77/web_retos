<?php
require_once "model/modeloSes.php";

class Controlador{

    public function __construct(){
        $this->vista = 'sesion/sesion';
        $this->modelo = new Modelo();
    }
    public function inicioSes(){
        $this->vista = 'sesion/sesion';
    }
    public function verificar(){
       // var_dump($this->modelo->verificar($_POST));
        if($this->modelo->verificar($_POST)["sesion"]!='0'){
            $this->vista= 'retos/aniadirReto';
        }else{
            echo 'mal';
        }
        //Si hago una vista mas como inicio puedo hacer truquele
    }


}

?>