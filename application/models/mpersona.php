<?php 

	class Mpersona extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function guardar($param)
		{
			$campos = array(
				'cuenta'=>$param['cuenta'],
				'nombre'=>$param['nombre'],
				'appaterno'=>$param['paterno'],
				'apmaterno'=>$param['materno'],
				'email'=>$param['correo'],
				'carrera'=>$param['licen']
				);
			$this->db->insert('persona',$campos);

			return $this->db->insert_id();
		}

		function getDatospersona($idpersona){
			$query = "SELECT * FROM persona where idpersona= ".$idpersona;
			return $this->db->query($query)->result();
		}

		function guardarregistro($param){
			$campos = array(
				'nombre'=>$param['nombre'],
				'appaterno'=>$param['paterno'],
				'apmaterno'=>$param['materno'],
				'carrera'=>$param['licen']
			);

			$result = array(
					's_usu' => $param['nombre']." ".$param['paterno'],
					'carrera' => $param['licen']
				);

			$this->session->set_userdata($result);
			$this->db->where('idpersona',$this->session->userdata('s_idPersona'));
			$this->db->update('persona',$campos);
			return 1;
		}
	}
?>
				