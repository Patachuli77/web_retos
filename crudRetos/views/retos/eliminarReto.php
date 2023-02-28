<?php
   if(isset($dataToView["data"]["nombre"])) $nombre = $dataToView["data"]["nombre"];
   if(isset($dataToView["data"]["id"])) $id = $dataToView["data"]["id"];


?>
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
<h1>¿Seguro que desea eliminar <?php echo $nombre?></h1>
<a href="index.php?action=confElimReto&control=controladorRetos&id=<?php echo $id;?>">Si</a>
<a href="index.php?action=consReto&control=controladorRetos&id=<?php echo $id;?>">No</a>