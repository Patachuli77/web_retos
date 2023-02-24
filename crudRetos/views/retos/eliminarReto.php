<?php
   if(isset($dataToView["data"]["nombre"])) $nombre = $dataToView["data"]["nombre"];
   if(isset($dataToView["data"]["id"])) $id = $dataToView["data"]["id"];


?>

<h1>¿Seguro que desea eliminar <?php echo $nombre?></h1>
<a href="index.php?action=confElimReto&control=controladorRetos&id=<?php echo $id;?>">Si</a>
<a href="index.php?action=consReto&control=controladorRetos&id=<?php echo $id;?>">No</a>