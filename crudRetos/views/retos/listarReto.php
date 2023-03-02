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
    <h1>Listado de Retos</h1>
    <?php
            //var_dump($dataToView["data"]);
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
    <?php
        

    ?>