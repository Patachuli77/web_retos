<?php
require_once "model/modeloReto.php";
//hay q hacer un formulario que se valide desde el servidor por ejemplo si seleccionmos las categorias desde un desplegable y lo cambiamos a uno de texto los fallos que de los dara el gestor 
/**
 *  Clase Controlador. Recibe las peticiones de las vistas, solicita información
 *  u ordena cambios al Modelo
 */
class Controlador {
    /*Inicia el modelo y selecciona la vista listar*/
    public function __construct() {
        $this->vista = 'categorias/aniadirCat';
        $this->modelo = new Modelo();
    }

public function vistaListaReto(){
        if($this->comprobarSes()){
            $this->vista = 'retos/listarReto';
        }
    }
    public function setReto(){
        if($this->comprobarSes()){
            $this->vista = 'retos/aniadirReto';
            return $this->modelo->getCategorias();
        }
    }
    public function addReto(){
        if($this->comprobarSes()){
            $this->vista = 'retos/listarReto';
            $this->modelo->addReto($_POST);
            return $this->modelo->getRetos();
        }
    }
    public function getRetos(){
        if($this->comprobarSes()){
            $this->vista = 'retos/listarReto';
            return $this->modelo->getRetos();
        }
    }
    public function consReto(){
        if($this->comprobarSes()){
            if(isset($_POST["id"])) $id = $_POST["id"];
            if(isset($_GET["id"])) $id = $_GET["id"];
            $this->vista = 'retos/consultarReto';    
            return $this->modelo->consReto($id);  
        }
    }
    public function editarReto(){
        if($this->comprobarSes()){
            if(isset($_GET["id"])) $id = $_GET["id"];
            $this->vista = 'retos/editarReto';
            return $this->modelo->consReto($id);
        }
    }
     public function eliminarReto(){
        if($this->comprobarSes()){
            $this->vista = "retos/listarReto";
            if(isset($_GET["id"])) $id = $_GET["id"];
            $this->modelo->eliminarReto($id);
            return $this->modelo->getRetos();
        }
    }
    public function saveReto(){
        if($this->comprobarSes()){
            $this->vista = 'retos/consultarReto';
            $this->modelo->saveReto($_POST);
            if(isset($_POST["id"])) $id = $_POST["id"];
            return $this->modelo->consReto($id);
        }
    }
    /*Para confirmar la eliminacion del reto*/
    public function confElimReto(){
        if($this->comprobarSes()){
            $this->vista = "retos/eliminarReto";
            if(isset($_GET["id"])) $id = $_GET["id"];
            return $this->modelo->consReto($id);
        }
    }
    public function comprobarSes(){
        if(!$_SESSION){
            $this->vista = 'sesion/sesion';
            return false;
        }
        else{
            return true;
        }

    }
}
?>