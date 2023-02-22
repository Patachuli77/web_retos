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
        $this->vista = 'retos/listarReto';
    }
    public function setReto(){
        $this->vista = 'retos/aniadirReto';
    }
    public function addReto(){
        $this->vista = 'retos/listarReto';

        $this->modelo->addReto($_POST);
        return $this->modelo->getRetos();
    }
    public function getRetos(){
        $this->vista = 'retos/listarReto';
       return $this->modelo->getRetos();
    }
    public function consReto(){
        if(isset($_POST["id"])) $id = $_POST["id"];
        $this->vista = 'retos/consultarReto';
       return $this->modelo->consReto($id);
    }
}
?>