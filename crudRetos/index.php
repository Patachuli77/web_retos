<?php
	session_start();
	require_once 'fpdf/fpdf.php';
	require_once 'config/configuracion.php';
	require_once 'model/conexion.php';
	


/** Cargamos el controlador */
if(!isset($_GET["control"])) $_GET["control"] = constant("DEFAULT_CONTROL");


	require_once 'controller/'.$_GET["control"].'.php';
	$controlador = new Controlador();

/**
 * Le mandamos mediante get las acciones que tiene que realizar el controlador 
 * Pero si no viene ningún get, que coja el por defecto
 */
if(!isset($_GET["action"])) $_GET["action"] = constant("DEFAULT_ACTION");



$dataToView["data"] = array();


if(method_exists($controlador,$_GET["action"])) $dataToView["data"] = $controlador->{$_GET["action"]}();

if($_GET["control"]=='controladorRetos'){
	$dataToView["categorias"]=$controlador->getCategorias();
}
/** Monta las vistas */
require_once('views/header.html');
require_once('views/'.$controlador->vista.'.php');
require_once('Views/footer.html');
?> 