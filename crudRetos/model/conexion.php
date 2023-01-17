<?php
class Conectar{

    public static function conexion(){
        $mysqli = new mysqli(servidorbd, usuario, password, basedatos) or die ('ERROR no conecta');
        return $mysqli;
    }
}
?>
