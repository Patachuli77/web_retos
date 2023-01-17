<main>
    <form action="index.php?action=setCategoria" method="POST">
        <input type="submit" value="Añadir nueva Categoria">
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Categoria</th>
            <th>OPCIONES</th>
        </tr>
        <?php
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
        ?>
    </table>
</main>
