<?php if(! defined('BASEPATH')) exit('No direct script access allowed');

	class Ccompartir extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mcompartir');
		}

		function index(){
			$lastid = $this->session->userdata('s_idPersona');
			$datos['result'] = $this->mcompartir->getArchivo();
			$this->load->view("layout/header");
			$this->load->view("layout/menu");
			$this->load->view("vcompartir",$datos);
			$this->load->view("layout/footer");
		}
		
		function eliminar(){
			$archivo = $this->uri->segment(3);
			echo $this->mcompartir->eliminar($archivo);
			redirect('ccompartir');
		}
	}
?>