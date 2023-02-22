    <h1>Listado de Retos</h1>
<?php
        //var_dump($dataToView["data"]);
            if($dataToView["data"]!=''){  
                echo "<h1> Seleccione un reto</h1>
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