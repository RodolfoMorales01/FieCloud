<?php
	class Mpapelera extends CI_model{
		
		function __construct(){
			parent::__construct();
		}
		function getArchivo($lastid){
            $query="SELECT * FROM archivos WHERE idpersona=".$lastid. " and estado='Eliminado' order by archivo ASC";
            return $this->db->query($query)->result();
        }
		function getfolder($lastid){
			$query="SELECT * FROM folder WHERE idpersona=".$lastid. " and estado='Eliminado' order by nombre ASC";
            return $this->db->query($query)->result();
		}

		function restaurarfolder($folder){
            $query="UPDATE folder SET estado='Agregado' WHERE idfolder=".$folder;
            return $this->db->query($query)->result;
        }
        
        function restaurarfile($file){
            $query="UPDATE archivos SET estado='Agregado' WHERE idarchivos=".$file;
            return $this->db->query($query)->result;
        }
        function folderdefinitivo($folder){
            $this->db->where('nombre',$folder);
			return $this->db->delete('folder');
        }
        function filedefinitivo($file){
            $this->db->where('archivo',$file);
			return $this->db->delete('archivos');
        }
	}
?>