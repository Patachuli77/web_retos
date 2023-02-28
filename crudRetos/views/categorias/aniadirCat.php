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
<main id="aniadir">
        <form action="index.php?action=addCategoria&control=controladorCat" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="id"/>
                <label for="nombre">Nombre</label><br/>
                <input type="text" name="nombre"><br/>
                <input type="submit">
         </form>
</main>
