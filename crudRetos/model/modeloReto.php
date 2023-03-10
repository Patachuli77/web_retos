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
            $fInicioReto = $post["fInicioRet"];
            $fFinReto = $post["fFinRet"];
            if(isset($post["publicado"])){
                $publicado = 1;
            }else{
                $publicado = 0;
            }
            $fPublicacion = $post["fPublicRet"];
    
            $idProf = $_SESSION['id'];
            $idCat = $post["categoria"];
        
            $sql=("INSERT INTO retos (id, nombre,dirigido,descripcion,fechaInicioInscripcion,fechaFinInscripcion,fechaInicioReto,fechaFinReto,fechaPublicacion,publicado,idProfesor,idCategoria) values(default, ?,?,?,?,?,?,?,?,?,?,?);");
            $stmt = $this->db->prepare($sql);
            $stmt->bind_param('ssssssssiss', $nombre,$dirigido,$descripcion,$fInicioIns,$fFinIns,$fInicioReto,$fFinReto,$fPublicacion,$publicado,$idProf,$idCat);
            $stmt->execute();
            $stmt->close();
    }
    /*Devuelve todas las filas de la tabla retos*/
    public function getRetos(){
        $consulta=$this->db->query("SELECT retos.*, categorias.nombre as categoria  from retos LEFT JOIN categorias on categorias.id=retos.idCategoria;");
        
            while($filas=$consulta->fetch_assoc()){
                $this->proyectos[]=$filas;
            }
            return $this->proyectos;
    }
    /*Devuelve el reto asociado al id que le pasaron*/
    public function consReto($id){

        $consulta=$this->db->query(" SELECT retos.* , categorias.nombre as categoria from retos LEFT JOIN categorias on categorias.id=retos.idCategoria WHERE retos.id=".$id."; ");
        
        return $consulta->fetch_assoc();
    }
    /*Elimina una fila por el id que le han pasado*/
    public function eliminarReto($id){

        $sql=("DELETE FROM retos WHERE id=".$id.";");
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $stmt->close();
    }
    /*Guarda el reto para la edicion*/ 
    public function saveReto($post){

        $nombre = $post["nombre"];
        $dirigido = $post["dirigido"];
        $descripcion = $post["descripcion"];
        if(empty($descripcion)){
            $descripcion=NULL;
        }
        $fInicioIns = $post["fInicioIns"];
        $fFinIns = $post["fFinIns"];
        $fInicioReto = $post["fInicioRet"];
        $fFinReto = $post["fFinRet"];
        if(isset($post["publicado"])){
            $publicado = 1;
         }else{
             $publicado = 0;
        }
        $fPublicacion = $post["fPublicRet"];
        $idProf = $_SESSION['id'];
        $idCat = $post["categoria"];
        $id= $post["id"];

        $sql=("UPDATE retos SET nombre = ?, dirigido = ?,descripcion = ?,fechaInicioInscripcion = ?,fechaFinInscripcion = ?,fechaInicioReto = ?,fechaFinReto = ?,fechaPublicacion = ?,publicado = ?,idProfesor = ?,idCategoria = ?  WHERE id=".$post["id"].";");
            $stmt = $this->db->prepare($sql);
            $stmt->bind_param('ssssssssiss', $nombre,$dirigido,$descripcion,$fInicioIns,$fInicioReto,$fFinIns,$fFinReto,$fPublicacion,$publicado,$idProf,$idCat);
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
    public function pdfRetos(){
		//Objeto pdf
		$pdf = new FPDF();
		//llamo los datos del reto
		$datosReto = $this->getRetos();
		//Añado una pagina al pdf
		$pdf->AddPage();

		// metadatos
		$pdf->SetTitle('Retos');
		$pdf->SetAuthor('Jorge');


		// añado un titulo
		$pdf->SetFont('Arial', 'B', 36);
		$pdf->Cell(0, 200, 'Retos Escolares', 0, 1, 'C');
		$pdf->Ln();

        foreach($datosReto as $reto){
            $pdf->AddPage();
            $pdf->SetFont('Arial', '', 24);
            $pdf->MultiCell(0, 7, utf8_decode("Nombre del reto: ".$reto['nombre']), 0, 1);
            $pdf->Ln();
            $pdf->SetFont('Arial', 'B', 14);
            $pdf->MultiCell(0, 7, utf8_decode("Recomendado para"), 0, 1);
            $pdf->SetFont('Arial', '', 10);
            $pdf->MultiCell(0, 7, utf8_decode($reto['dirigido']), 0, 1);
            $pdf->SetFont('Arial', 'B', 14);
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode("Descripcion del reto"), 0, 1);
            $pdf->SetFont('Arial', '', 10);
            if ($reto['descripcion']==NULL)
            {
                $pdf->MultiCell(0, 7, utf8_decode("Sin descripcion"), 0, 1);
            }
            else{
                $pdf->MultiCell(0, 7, utf8_decode($reto['descripcion']), 0, 1);
            }
            $pdf->Ln();
            $pdf->SetFont('Arial', 'B', 14);
            $pdf->MultiCell(0, 7, utf8_decode("Categoria"), 0, 1);
            $pdf->SetFont('Arial', '', 10);
            $pdf->MultiCell(0, 7, utf8_decode($reto['categoria']), 0, 1);
            $pdf->Ln();
        }
		$pdf->Output('', 'Retos.pdf');
    } 
}
?>