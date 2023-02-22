<?php

$id = $nombre = "";

if(isset($dataToView["data"]["id"])) $id = $dataToView["data"]["id"];
if(isset($dataToView["data"]["nombre"])) $nombre = $dataToView["data"]["nombre"];
?>
<main id="aniadir">
        <form action="index.php?action=saveCategoria&control=controladorCat" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="id" value="<?php echo $id ?>"/>
                <label for="nombre">Nombre</label><br/>
                <input type="text" name="nombre" value="<?php echo $nombre ?>"><br/>
                <input type="submit" id='<?php echo $id ?>'>
        </form>
</main>
