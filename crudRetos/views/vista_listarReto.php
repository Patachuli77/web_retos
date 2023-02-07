    <h1>Listado de Retos</h1>
<?php
        var_dump( $dataToView["data"]);
            if($dataToView["data"]!=''){  
                foreach ($dataToView["data"] as $datos) {
                    echo "<tr>
                            <td>".$datos['id']."</td>
                            <td>
                                ".$datos['nombre']."
                            </td>
                        </tr>";
                }
                echo " </table>";
            }
            else{
                echo "</table>
                <h1>No hay ninguna reto creado pulse añadir para empezar a crearlas</h1>

                ";
                
            }

        ?>