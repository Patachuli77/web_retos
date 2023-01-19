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

        // comprobamos si exite el Categoria  Comprobar antes de meter en categoria si no hay filas con ese nombre
        


        //Actualizar
        if(isset($post["id"]) && $post["id"] != ""){

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

        }else{//Añadir
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
    }

    public function eliminarCategoria($id){

        $sql=("DELETE FROM categorias WHERE id=".$id.";");
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $stmt->close();
    }

}
?>