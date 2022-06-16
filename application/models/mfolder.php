<?php 
	class Mfolder extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		function crearfolder($carpeta,$dir,$tipo,$estado,$date,$lastid){
			$folder = array(
				'nombre' => $carpeta, 
				'ruta' => $dir,
				'tipo' => $tipo,
				'estado' => $estado,
				'date' => $date,
				'idpersona' => $lastid
			);
			return $this->db->insert('folder', $folder);
		}
		function getfolder($lastid){
			$query="SELECT * FROM folder WHERE idpersona=".$lastid. " and estado='Agregado' order by nombre ASC";
            return $this->db->query($query)->result();
		}

		function eliminarfolder($folder){
            $query="UPDATE folder SET estado='Eliminado' WHERE idfolder=".$folder;

            // $query="DELETE FROM folder WHERE idfolder =".$folder;
            return $this->db->query($query);
        }
		function getfolder1($lastid,$ruta){
			$query="SELECT * FROM folder WHERE estado='Agregado' and idPersona='".$lastid."' and ruta='".$ruta.".nombre' and ruta!='".$ruta."'order by nombre ASC";
            return $this->db->query($query)->result();
		}
	}
?>