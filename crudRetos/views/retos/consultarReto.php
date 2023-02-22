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

var_dump($dataToView["data"])

?>
<main id="consulta">
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
                <td><?php echo $publicado;?></td>
                <td><?php echo $categoria;?></td>
            </tr>
        </table>
        <p>editar eliminar</p>
</main>
