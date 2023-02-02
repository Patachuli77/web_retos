<?php
require_once "model/modelo.php";

/**
 *  Clase Controlador. Recibe las peticiones de las vistas, solicita información
 *  u ordena cambios al Modelo
 */
class ControladorCategoria {
    /*Inicia el modelo y selecciona la vista listar*/
    public function __construct() {
        $this->vista = 'aniadir';
        $this->modelo = new Modelo();
    }
    /*Funcion que cambia la vista a la de añadir*/
    public function setCategoria(){
        $this->vista = 'aniadir';
    }
    /*Funcion que pide al modelo las filas de la tabla categorias devuelve un array*/
    public function getCategoria() {
        // echo ' nombres Categorias ';
        return $this->modelo->getCategoria();
    }
    /*Funcion que cambia la vista a la vista editar y pide al modelo la fila del id que le pasa*/
    public function editarCategoria(){
        $this->vista = 'editar';
        if(isset($_GET["id"])) $id = $_GET["id"];
        // var_dump($id);
        return $this->modelo->consultaId($id);
    }
    /*Funcion que cambia a la vista listar,le pide al modelo que guarde los datos que le pasan por post y devuelve las filas de la tabla categorias*/
    public function saveCategoria(){
        $this->vista = 'listar';

        $this->modelo->saveCategoria($_POST);
        return $this->modelo->getCategoria();
    }
    /*Funcion que cambia a la vista listar,le pide al modelo que modifique los datos que le pasan por post y devuelve las filas de la tabla categorias*/
    public function addCategoria(){
        $this->vista = 'listar';

        $this->modelo->addCategoria($_POST);
        return $this->modelo->getCategoria();
    }
    /*Funcion que cambia a la vista listar, le pide al modelo que elimine la categoria del id que le pasa y devuelve las filas de la tabla categorias*/
    public function eliminarCategoria(){
        $this->vista = "listar";
        if(isset($_GET["id"])) $id = $_GET["id"];
        $this->modelo->eliminarCategoria($id);
        return $this->modelo->getCategoria();
    }

}
?>