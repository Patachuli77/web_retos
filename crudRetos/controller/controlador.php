<?php
require_once "model/modelo.php";

/**
 *  Clase Controlador. Recibe las peticiones de las vistas, solicita información
 *  u ordena cambios al Modelo
 */
class ControladorCategoria {

    public function __construct() {
        $this->vista = 'listar';
        $this->modelo = new Modelo();
    }

    public function setCategoria(){
        $this->vista = 'aniadir';
    }

    public function getCategoria() {
        // echo ' nombres Categorias ';
        return $this->modelo->getCategoria();
    }

    public function editarCategoria(){
        $this->vista = 'editar';
        if(isset($_GET["id"])) $id = $_GET["id"];
        // var_dump($id);
        return $this->modelo->consultaId($id);
    }

    public function saveCategoria(){
        $this->vista = 'listar';

        $this->modelo->saveCategoria($_POST, $_FILES);
        return $this->modelo->getCategoria();
    }

    public function eliminarCategoria(){
        $this->vista = "listar";
        if(isset($_GET["id"])) $id = $_GET["id"];
        $this->modelo->eliminarCategoria($id);
        return $this->modelo->getCategoria();
    }

}
?>