<?php 
	class Mlogin extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function iniciar($usu,$pass){
			$this->db->select('p.idPersona,u.idUsuario, p.nombre, p.appaterno, p.apmaterno, p.carrera');
			$this->db->from('usuario u');
			$this->db->join('persona p','p.idPersona = u.idPersona');
			$this->db->where('u.nomUsuario',$usu);
			$this->db->where('u.clave',$pass);
    		$res = $this->db->get();

    		if ($res->num_rows() == 1) {
    			$r = $res -> row();
    			$s_usu = array(
    				's_idPersona' => $r->idPersona,
    				's_idUsuario' => $r->idUsuario,
    				's_usu'=> $r->nombre." ".$r->appaterno,
    				'carrera'=>$r->carrera
    				);
    			$this->session->set_userdata($s_usu);
    			return 1;
    		} else{
    			return 0;
    		}	
		}
	}
 ?>