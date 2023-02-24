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
if(isset($dataToView["data"]["categoria"])) $categoria = $dataToView["data"]["categoria"];

//var_dump($dataToView["data"])

?>
<main id="consulta">
    <h1>Informacion del Reto</h1>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Dirigido</th>
                <th>Descripcion</th>
                <th>Fecha inicio inscripcion</th>
                <th>Fecha fin inscripcion</th>
                <th>Fecha inicio reto</th>
                <th>Fecha fin reto</th>
                <th>Fecha publicacion</th>
                <th>Publicado</th>
                <th>Categoria</th>
            </tr>
            <tr>   
                <td><?php echo $nombre;?></td>
                <td><?php echo $dirigido;?></td>
                <td><?php echo $descripcion;?></td>
                <td><?php echo $fInicioIns;?></td>
                <td><?php echo $fFinIns;?></td>
                <td><?php echo $fInicioRet;?></td>
                <td><?php echo $fFinRet;?></td>
                <td><?php echo $fpublicRet;?></td>
                <td><?php if($publicado==1){echo 'Si';}else{echo 'No';}?></td>
                <td><?php echo $categoria;?></td>
            </tr>
        </table>
        <p>
            <a href="index.php?action=editarReto&control=controladorRetos&id=<?php echo $id;?>">editar</a> 
            <a href="index.php?action=confElimReto&control=controladorRetos&id=<?php echo $id;?>">eliminar</a>
        </p>
</main>
