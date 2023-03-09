<?php
    require_once "./views/plantillas/navbar.html";
?>
<main id="aniadir">
        <form action="index.php?action=addCategoria&control=controladorCat" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="id"/>
                <label for="nombre">Nombre</label><br/>
                <input type="text" name="nombre"><br/>
                <input type="submit">
         </form>
</main>
