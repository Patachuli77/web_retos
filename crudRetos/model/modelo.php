<?php
class Modelo {
    private $db;
    private $proyectos;


    public function __construct() {
        $this->db = Conectar::conexion();
        $this->proyectos = array();
    }
        
    public function getCategoria(){
        $consulta=$this->db->query("SELECT * from categorias;");
        
            while($filas=$consulta->fetch_assoc()){
                $this->proyectos[]=$filas;
            }
            return $this->proyectos;
    }

    public function consultaId($id){
        // print_r($id);

        $consulta=$this->db->query(" SELECT * from categorias WHERE id=".$id."; ");
        
        return $consulta->fetch_assoc(); // devuelve la fila
    }

    public function saveCategoria($post, $file){
        

        $id = $nombre = "";

        // comprobamos si exite el Categoria por hacer

        //
        if(isset($post["id"]) && $post["id"] != ""){
            
            if(isset($post["nombre"])) $nombre = $post["nombre"];

            $sql=("UPDATE categorias SET nombre = ? WHERE id=".$post["id"].";");
            $stmt = $this->db->prepare($sql);
            $stmt->bind_param('s', $nombre);
            $stmt->execute();
            $stmt->close();

        }else{
            if(isset($post["nombre"])) $nombre = $post["nombre"];


            $sql=("INSERT INTO categorias (id, nombre) values(default, ?);");
            $stmt = $this->db->prepare($sql);
            $stmt->bind_param('s', $nombre);
            $stmt->execute();
            $stmt->close();
        }      
    }

    public function eliminarCategoria($id){

        $sql=("DELETE FROM categorias WHERE id=".$id.";");
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $stmt->close();
    }

}
?>