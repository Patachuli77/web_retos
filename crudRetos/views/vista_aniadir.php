<?php

$id = $nombre = "";

if(isset($dataToView["data"]["id"])) $id = $dataToView["data"]["id"];
if(isset($dataToView["data"]["nombre"])) $nombre = $dataToView["data"]["nombre"];


echo '
        <main id="aniadir">
                <form action="index.php?action=saveCategoria" enctype="multipart/form-data" method="POST">
                        <input type="hidden" name="id" value="'.$id.'"/>
                        <label for="nombre">Nombre</label><br/>
                        <input type="text" name="nombre" value="'.$nombre.'"><br/>
                        <input type="reset" value="Borrar">
                        <input type="submit" id='.$id.'>
                </form>
        </main>
'
;