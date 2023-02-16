<main>
    <table>
        <tr>
            <th>ID</th>
            <th>Categoria</th>
            <th>OPCIONES</th>
        </tr>
        <?php
            if($dataToView["data"]!=''){  
                foreach ($dataToView["data"] as $datos) {
                    echo "<tr>
                            <td>".$datos['id']."</td>
                            <td>
                                ".$datos['nombre']."
                            </td>
                            <td>
                                <a href=\"index.php?action=editarCategoria&id=".$datos['id']."\">
                                 <span class=\"material-symbols-outlined\">edit_note</span>
                                </a>
                                <a href=\"index.php?action=eliminarCategoria&id=".$datos['id']."\">
                                 <span class=\"material-symbols-outlined\">delete</span>
                                </a>
                            </td>
                        </tr>";
                }
                echo " </table>";
            }
            else{
                echo "</table>
                <h1>No hay ninguna categoria creada pulse añadir para empezar a crearlas</h1>

                ";
                
            }

        ?>
   
</main>
