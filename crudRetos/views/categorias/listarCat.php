<nav id="nav2">
        <ol>
            <li id="principal"><h2>Opciones</h2></li>
            <li class="resaltado"><form method="POST" action="index.php?action=getRetos&control=controladorRetos"><input type="submit" value="Lista de reto"></form></li>
            <li class="resaltado"><form method="POST" action="index.php?action=setReto&control=controladorRetos"><input type="submit" value="Alta de reto"></form></li>
            <li class="resaltado"><form method="POST" action="index.php?action=getCategoria&control=controladorCat"><input type="submit" value="Lista de categoria"></form></li>
            <li class="resaltado"><form method="POST" action="index.php?action=setCategoria&control=controladorCat"><input type="submit" value="Alta de categoria"></form></li>
        </ol>
    </nav>
    <main>
        <aside>
            <ol>
                <li id="principal"><h2>Opciones</h2></li>
                <li class="resaltado"><form method="POST" action="index.php?action=getRetos&control=controladorRetos"><input type="submit" value="Lista de reto"></form></li>
                <li class="resaltado"><form method="POST" action="index.php?action=setReto&control=controladorRetos"><input type="submit" value="Alta de reto"></form></li>
                <li class="resaltado"><form method="POST" action="index.php?action=getCategoria&control=controladorCat"><input type="submit" value="Lista de categoria"></form></li>
                <li class="resaltado"><form method="POST" action="index.php?action=setCategoria&control=controladorCat"><input type="submit" value="Alta de categoria"></form></li>
            </ol>
        </aside>
        <div id="util">
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
                                <a href=\"index.php?action=editarCategoria&control=controladorCat&id=".$datos['id']."\">
                                 <span class=\"material-symbols-outlined\">edit_note</span>
                                </a>
                                <a href=\"index.php?action=eliminarCategoria&control=controladorCat&id=".$datos['id']."\">
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
