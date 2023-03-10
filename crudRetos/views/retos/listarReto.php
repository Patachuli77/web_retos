<?php
    require_once "./views/plantillas/navbar.html";

?>
    <h1>Listado de Retos</h1>
    <?php
            //var_dump($dataToView["categorias"]);
                if($dataToView["data"]!=''){  
                    echo "<h2> Seleccione un reto</h2>
                    <form action='index.php?action=consReto&control=controladorRetos' enctype='multipart/form-data' method='POST'> <select name='id'>";
                    foreach ($dataToView["data"] as $datos) {
                        echo "<option value=".$datos['id'].">".$datos['nombre']."</option>";
                    }
                    echo " </select>
                        <input type='submit' value='consultar'>
                    </form>";
                }
                else{
                    echo "</table>
                    <h1>No hay ninguna reto creado pulse añadir para empezar a crearlas</h1>
                    ";
                }
    ?>
    <h1>Pdf con retos</h1>  
    <form action='index.php?action=pdfRetos&control=controladorRetos' enctype='multipart/form-data' method='POST'>
        <input type="submit" value="Descargar Retos">
    </form>