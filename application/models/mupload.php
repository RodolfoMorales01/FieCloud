<?php 
	class Mupload extends CI_Model
	{
		
		function __construct(){
			parent::__construct();
		}
		function subir($archivo,$tamaño,$tipo,$ruta,$date,$estado,$lastid){
            $data = array(
                'archivo' => $archivo,
                'tamaño' => $tamaño,
                'tipo' => $tipo,
                'ruta' => $ruta,
                'date' => $date,
                'estado' => $estado,
                'idpersona' => $lastid
            );
            return $this->db->insert('archivos', $data);
        }
        function getArchivo($lastid){
            $query="SELECT * FROM archivos WHERE idpersona=".$lastid. " and estado='Agregado' order by archivo ASC";
            return $this->db->query($query)->result();
        }
        function getsize($lastid){
            $query="SELECT SUM(tamaño)as total FROM archivos WHERE idpersona=".$lastid. " and estado='Agregado' order by archivo ASC";
            return $this->db->query($query)->result();
        }

        function eliminar($file){
            $query="UPDATE archivos SET estado='Eliminado' WHERE idarchivos=".$file;

            // $query="DELETE FROM archivos WHERE idarchivos =".$file;
            return $this->db->query($query);
        }

        function getArchivo1($lastid,$ruta){
            $query="SELECT * FROM archivos WHERE idpersona=".$lastid. " and estado='Agregado' and ruta!='".$ruta."' and ruta='".$ruta.".nombre' order by archivo ASC";
            return $this->db->query($query)->result();
        }

        function compartir($archivo){
            $query="UPDATE archivos SET shared='Compartido' WHERE idarchivos=".$archivo;
            return $this->db->query($query);
        }
	}
?>