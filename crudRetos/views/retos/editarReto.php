<?php
$dirigido=$descripcion=$fInicioIns=$fFinIns=$fInicioRet=$fFinRet=$fpublicRet=$publicado=$categoria=$id=$nombre='';

if(isset($dataToView["data"]["nombre"])) $nombre = $dataToView["data"]["nombre"];
if(isset($dataToView["data"]["id"])) $id = $dataToView["data"]["id"];

if(isset($dataToView["data"]["dirigido"])) $dirigido = $dataToView["data"]["dirigido"];
if(isset($dataToView["data"]["descripcion"])) $descripcion = $dataToView["data"]["descripcion"];
if(isset($dataToView["data"]["fechaInicioInscripcion"])) $fInicioIns = substr($dataToView["data"]["fechaInicioInscripcion"],0,-9);
if(isset($dataToView["data"]["fechaFinInscripcion"])) $fFinIns = substr($dataToView["data"]["fechaFinInscripcion"],0,-9);
if(isset($dataToView["data"]["fechaInicioReto"])) $fInicioRet = substr($dataToView["data"]["fechaInicioReto"],0,-9);
if(isset($dataToView["data"]["fechaFinReto"])) $fFinRet = substr($dataToView["data"]["fechaFinReto"],0,-9);
if(isset($dataToView["data"]["fechaPublicacion"])) $fpublicRet = substr($dataToView["data"]["fechaPublicacion"],0,-9);
if(isset($dataToView["data"]["publicado"])) $publicado = $dataToView["data"]["publicado"];
if(isset($dataToView["data"]["idCategoria"])) $categoria = $dataToView["data"]["idCategoria"];
//var_dump($dataToView["data"])
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
<main id="consulta">
    <h1>Edicion del Reto</h1>
    <form action="index.php?action=saveReto&control=controladorRetos" enctype="multipart/form-data" method="POST">
                <input type="hidden" value="<?php echo $id;?>" name="id"/>
                <input type="hidden" name="idProf"/>
                <label for="nombre">Nombre</label><br/>
                <input type="text" value="<?php echo $nombre;?>" name="nombre"><br/>
                
                <label for="dirigido">Dirigido</label><br/>
                <input type="text" value="<?php echo $dirigido;?>"name="dirigido"><br/>
                
                <label for="descripcion">Descripcion</label><br/>
                <textarea name="descripcion"><?php echo $descripcion;?></textarea><br/>
                
                <label for="fInicioIns">Fecha de inico de inscripcion</label><br/>
                <input type="date" value="<?php echo $fInicioIns;?>"name="fInicioIns"><br/>
                
                <label for="fFinIns">Fecha de fin de inscripcion</label><br/>
                <input type="date"value="<?php echo $fFinIns;?>"  name="fFinIns"><br/>
                
                <label for="fInicioRet">Fecha de incio de reto</label><br/>
                <input type="date" value="<?php echo $fInicioRet;?>" name="fInicioRet"><br/>
                
                <label for="fFinRet">Fecha de final de reto</label><br/>
                <input type="date" value="<?php echo $fpublicRet;?>" name="fFinRet"><br/>
                
                <label for="fpublicRet">Fecha publicacion del reto</label><br/>
                <input type="date" value="<?php echo $fpublicRet;?>" name="fPublicRet"><br/>
                
                <label for="publicado">Publicado</label><br/>
                <input type="checkbox" <?php if($publicado==1) echo 'checked';?> name="publicado"><br/>

                <label for="categoria">Categoria</label><br/>
                <select name="categoria" value="<?php echo $categoria;?>">
                    <option value="1">Hola</option>
                    <option value="2">Adios</option>
                </select><br/>

                <input type="submit" value="Guardar">
         </form>
<main>