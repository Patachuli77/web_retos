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
        if($this->modelo->primero()["sesion"]=='0'){
            
            $this->modelo->aniadir($_POST);
        }
       // var_dump($this->modelo->verificar($_POST));
        if($this->modelo->verificar($_POST)!='0'){
            $this->vista= 'retos/aniadirReto';
        }else{
            echo 'mal';
        }
        //Si hago una vista mas como inicio puedo hacer truquele
    }


}

?>