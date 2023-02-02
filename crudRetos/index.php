<?php

	require_once 'config/configuracion.php';
	require_once 'model/conexion.php';
	require_once 'controller/controlador.php';


/** Cargamos el controlador */
$controladorCategoria = new ControladorCategoria();

/**
 * Le mandamos mediante get las acciones que tiene que realizar el controlador 
 * Pero si no viene ningún get, que coja el por defecto
 */
if(!isset($_GET["action"])) $_GET["action"] = constant("DEFAULT_ACTION");


$dataToView["data"] = array();

if(method_exists($controladorCategoria,$_GET["action"])) $dataToView["data"] = $controladorCategoria->{$_GET["action"]}();


/** Monta las vistas */
require_once('views/header.html');
require_once('views/vista_'.$controladorCategoria->vista.'Reto.php');
require_once('Views/footer.html');
?> 