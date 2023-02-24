<main id="aniadir">
    <h1>Alta de Reto</h1>
        <form action="index.php?action=addReto&control=controladorRetos" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="id"/>
                <input type="hidden" name="idProf"/>
                <label for="nombre">Nombre</label><br/>
                <input type="text" name="nombre"><br/>
                
                <label for="dirigido">Dirigido</label><br/>
                <input type="text" name="dirigido"><br/>
                
                <label for="descripcion">Descripcion</label><br/>
                <textarea name="descripcion"></textarea><br/>
                
                <label for="fInicioIns">Fecha de inico de inscripcion</label><br/>
                <input type="date" name="fInicioIns"><br/>
                
                <label for="fFinIns">Fecha de fin de inscripcion</label><br/>
                <input type="date" name="fFinIns"><br/>
                
                <label for="fInicioRet">Fecha de incio de reto</label><br/>
                <input type="date" name="fInicioRet"><br/>
                
                <label for="fFinRet">Fecha de final de reto</label><br/>
                <input type="date" name="fFinRet"><br/>
                
                <label for="fpublicRet">Fecha publicacion del reto</label><br/>
                <input type="date" name="fPublicRet"><br/>
                
                <label for="publicado">Publicado</label><br/>
                <input type="checkbox" name="publicado"><br/>

                <label for="categoria">Categoria</label><br/>
                <select name="categoria">
                <?php
                    foreach ($dataToView["data"] as $datos) {
                        echo "<option value=".$datos['id'].">".$datos['nombre']."</option>";
                    }
                ?>
                </select><br/>

                <input type="submit">
         </form>
</main>