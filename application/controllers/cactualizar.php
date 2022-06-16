<?php
	class Cactualizar extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mpersona');
			$this->load->model('musuario');
			$this->load->library('encryption');
		}
		function index(){
			$idpersona = $this->session->userdata('s_idPersona');
			$datos['result']=$this->mpersona->getDatospersona($idpersona);
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('persona/actpersona',$datos);
			$this->load->view('layout/footer');
		}

		function guardarregistro(){
			$param['nombre'] = $this->input->post('nombre');
			$param['paterno'] = $this->input->post('paterno');
			$param['materno'] = $this->input->post('materno');
			$param['licen'] = $this->input->post('licen');

			$paramsu['clave'] = $this->encryption->encrypt($this->input->post('password'));
			$paramsu['clave1'] = $this->encryption->encrypt($this->input->post('password1'));

			$this->mpersona->guardarregistro($param);
			if ($paramsu['clave'] == $paramsu['clave1']){
				$this->musuario->guardarregistro($paramsu);
			}
			
			redirect('cactualizar');
		}
	}
?>