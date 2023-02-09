    <h1>Listado de Retos</h1>
<?php
        var_dump($dataToView["data"]);
            if($dataToView["data"]!=''){  
                echo "<h1> Seleccione un reto</h1>
                    <select>";
                foreach ($dataToView["data"] as $datos) {
                    echo "<option value=".$datos['id'].">".$datos['nombre']."</option>";
                }
                echo " </select>";
            }
            else{
                echo "</table>
                <h1>No hay ninguna reto creado pulse añadir para empezar a crearlas</h1>

                ";
                
            }

        ?>