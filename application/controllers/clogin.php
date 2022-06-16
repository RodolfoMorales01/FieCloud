<?php 
	class Clogin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mlogin');
			$this->load->library('encryption');
		}

		function index(){
			$data['mensaje'] ="";
			$this->load->view("vlogin",$data);
			if ($this->session->userdata('s_usu')) {
				redirect('cinicio');
			}
		}

		public function iniciar(){
			$usu =$this->input->post('usu');
			$pass = $this->encryption->encrypt($this->input->post('pass'));
			$res = $this->mlogin->iniciar($usu,$pass);
			
			if ($res == 1) {
				redirect('cinicio');
			}else{
				$data['mensaje'] ="Usuario o contraseña incorrecta"; 
				$this->load->view('vlogin',$data);
				// redirect('clogin')
			}
		}

		public function logout(){
			$lastid = $this->session->userdata('s_idPersona');
			closedir('./uploads/'.$lastid);
			$this->session->sess_destroy();
			redirect(base_url());
		}
	}
 ?>