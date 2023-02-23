<?php
class Modelo {
    private $db;
    private $proyectos;

    /*Inicia la conexion de la base de datos*/
    public function __construct() {
        $this->db = Conectar::conexion();
        $this->proyectos = array();
    }
    /******************************RETOS*********************************/
    /*Funcion que añade el reto (no valida)*/
    public function addReto($post){
       
            $nombre = $post["nombre"];
            $dirigido = $post["dirigido"];
            $descripcion = $post["descripcion"];
            $fInicioIns = $post["fInicioIns"];
            $fFinIns = $post["fFinIns"];
            /*$fInicioReto*/
            $fFinReto = $post["fFinRet"];
            if(isset($post["publicado"])){
                $publicado = 1;
            }else{
                $publicado = 0;
            }
            $fPublicacion = $post["fPublicRet"];
    
            $idProf = 1;
            $idCat = $post["categoria"];
        
            $sql=("INSERT INTO retos (id, nombre,dirigido,descripcion,fechaInicioInscripcion,fechaFinInscripcion,fechaFinReto,fechaPublicacion,publicado,idProfesor,idCategoria) values(default, ?,?,?,?,?,?,?,?,?,?);");
            $stmt = $this->db->prepare($sql);
            $stmt->bind_param('sssssssiss', $nombre,$dirigido,$descripcion,$fInicioIns,$fFinIns,$fFinReto,$fPublicacion,$publicado,$idProf,$idCat);
            $stmt->execute();
            $stmt->close();
    }
    /*Devuelve todas las filas de la tabla retos*/
    public function getRetos(){
        $consulta=$this->db->query("SELECT * from retos;");
        
            while($filas=$consulta->fetch_assoc()){
                $this->proyectos[]=$filas;
            }
            return $this->proyectos;
    }
    /*Devuelve el reto asociado al id que le pasaron*/
    public function consReto($id){

        $consulta=$this->db->query(" SELECT * from retos WHERE id=".$id."; ");
        
        return $consulta->fetch_assoc();
    }
    /*Elimina una fila por el id que le han pasado*/
    public function eliminarReto($id){

        $sql=("DELETE FROM retos WHERE id=".$id.";");
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $stmt->close();
    }
    public function saveReto($post){

        $nombre = $post["nombre"];
        $dirigido = $post["dirigido"];
        $descripcion = $post["descripcion"];
        $fInicioIns = $post["fInicioIns"];
        $fFinIns = $post["fFinIns"];
        /*$fInicioReto*/
        $fFinReto = $post["fFinRet"];
        if(isset($post["publicado"])){
            $publicado = 1;
         }else{
             $publicado = 0;
        }
        $fPublicacion = $post["fPublicRet"];
        $idProf = 1;
        $idCat = $post["categoria"];
        $id= $post["id"];

        $sql=("UPDATE retos SET nombre = ?, dirigido = ?,descripcion = ?,fechaInicioInscripcion = ?,fechaFinInscripcion = ?,fechaFinReto = ?,fechaPublicacion = ?,publicado = ?,idProfesor = ?,idCategoria = ?  WHERE id=".$post["id"].";");
            $stmt = $this->db->prepare($sql);
            $stmt->bind_param('sssssssiss', $nombre,$dirigido,$descripcion,$fInicioIns,$fFinIns,$fFinReto,$fPublicacion,$publicado,$idProf,$idCat);
            $stmt->execute();
            $stmt->close();
    }
    public function getCategorias(){
        $consulta=$this->db->query("SELECT * from categorias;");
        
        while($filas=$consulta->fetch_assoc()){
            $this->proyectos[]=$filas;
        }
        return $this->proyectos;
    }
}
?>