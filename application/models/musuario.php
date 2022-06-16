<?php 

	class Musuario extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function guardarusuario($paramsu)
		{
			$campos = array(
				'nomUsuario'=>$paramsu['correo'],
				'clave'=>$paramsu['clave'],
				'idpersona'=>$paramsu['idpersona']
				);
			$this->db->insert('usuario',$campos);
		}
		public function guardarregistro($paramsu){
			$campos = array('clave' => $paramsu['clave']);
			$this->db->where('idusuario',$this->session->userdata('s_idUsuario'));
			$this->db->update('usuario',$campos);
			return 1;
		}
	}
?>