<?php
class Modelo {
    private $db;
    private $proyectos;

    /*Inicia la conexion de la base de datos*/
    public function __construct() {
        $this->db = Conectar::conexion();
        $this->proyectos = array();
    }
    /*Devuelve todas las filas de la tabla categorias*/
    public function getCategoria(){
        $consulta=$this->db->query("SELECT * from categorias;");
        
            while($filas=$consulta->fetch_assoc()){
                $this->proyectos[]=$filas;
            }
            return $this->proyectos;
    }
    /*Devuelve la fila del id que le han pasado*/
    public function consultaId($id){
        // print_r($id);

        $consulta=$this->db->query(" SELECT * from categorias WHERE id=".$id."; ");
        
        return $consulta->fetch_assoc();
    }
    /*Metodo que guarda una nueva fila en la tabla categoria*/
    public function addCategoria($post){
            if(isset($post["nombre"]) && $post["nombre"]!=''){
                $nombre = $post["nombre"];

                $consulta=$this->db->query(" SELECT * from categorias WHERE nombre='".$nombre."'; ");

                if($consulta->num_rows<1){
                    $sql=("INSERT INTO categorias (id, nombre) values(default, ?);");
                    $stmt = $this->db->prepare($sql);
                    $stmt->bind_param('s', $nombre);
                    $stmt->execute();
                    $stmt->close();

                }
            } else{

                echo('no hay nombre');
            }
            
    }
    /*Metodo que guarda en la tabla categorias la modificacion con los datos del post*/ 
    public function saveCategoria($post){
             if(isset($post["nombre"]) && $post["nombre"]!=''){
                $nombre = $post["nombre"];

                $consulta=$this->db->query(" SELECT * from categorias WHERE nombre='".$nombre."'; ");

                if($consulta->num_rows<1){//revisa q no hay mas como el
                    $sql=("UPDATE categorias SET nombre = ? WHERE id=".$post["id"].";");
                    $stmt = $this->db->prepare($sql);
                    $stmt->bind_param('s', $nombre);
                    $stmt->execute();
                    $stmt->close();
                }     
            }else{

                echo('no hay nombre');

            }

    }
    /*Elimina una fila por el id que le han pasado*/
    public function eliminarCategoria($id){

        $sql=("DELETE FROM categorias WHERE id=".$id.";");
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $stmt->close();
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