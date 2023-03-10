<?php
    class Modelo{
        private $db;
        private $proyectos;


        public function __construct(){
            $this->db = Conectar::conexion();
            $this->proyectos= array();
        }

        public function verificar($post){
            $nombre = $post["nombre"];
            $clave = $post["clave"];

            $sql=("SELECT idProfesor, nombre, password FROM profesores WHERE nombre=?;");
            $stmt= $this->db->prepare($sql);
            $stmt->bind_param('s', $nombre);
            $stmt -> execute();
            $result = $stmt ->get_result();


            $fila = $result->fetch_array(MYSQLI_NUM);

            if($result && password_verify($clave, $fila[2])){
                @session_start();
                $_SESSION['id'] = $fila[0];
                $_SESSION['nombre'] = $fila[1];
                return '1';

            }else{
                return '0';
            }
        }
        public function primero(){
            $sql=("SELECT COUNT(*) as sesion FROM profesores;");
            $consulta= $this->db->query($sql);
            return $consulta->fetch_assoc();
           
        }
       /*public function aniadir($post){
            $nombre= $post["nombre"];
            $clave= password_hash($post['clave'], PASSWORD_BCRYPT);
            $correo = 'jorge@gmail';
            $sql=("INSERT INTO profesores(idProfesor, nombre, correo, password) values(default, ?,?,?)");
            $stmt = $this->db->prepare($sql);
            $stmt->bind_param('sss', $nombre,$correo,$clave);
            $stmt->execute();
            $stmt->close();
        }*/
        public function cerrarSes(){
            session_unset();
            session_destroy();
        }
    }

?>