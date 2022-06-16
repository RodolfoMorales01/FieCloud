<?php
    class Mcompartir extends CI_Model{

		function __construct(){
			parent::__construct();
		}

        function getArchivo(){
            $query="SELECT * FROM archivos WHERE shared='compartido'";
            return $this->db->query($query)->result();
        }

        function eliminar($archivo){
            $query="UPDATE archivos SET shared='agregado' WHERE idarchivos=".$archivo;
            return $this->db->query($query);
        }
    }
?>