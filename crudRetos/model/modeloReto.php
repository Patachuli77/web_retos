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
    public function addReto($post){
       
            $nombre = $post["nombre"];
            $dirigido = $post["dirigido"];
            $descripcion = $post["descripcion"];
            $fInicioIns = $post["fInicioIns"];
            $fFinIns = $post["fFinIns"];
            /*$fInicioReto*/
            $fFinReto = $post["fFinRet"];
            $fPublicacion = $post["fPublicRet"];
            $publicado = 1;
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
}
?>