<?php 
	class Cpersona extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mpersona');
			$this->load->model('musuario');
			$this->load->library('encryption');
		}

		public function index()
		{
			$data['mensaje'] = " " ;
			$this->load->view('persona/regpersona',$data);
		}

		public function Guardar()
		{
			$data['mensaje'] ="";
			$paramsu['clave'] = $this->encryption->encrypt($this->input->post('password'));
			$paramsu['clave1'] = $this->encryption->encrypt($this->input->post('password1'));

			if($paramsu['clave'] ==$paramsu['clave1']){
				//persona
				$param['cuenta'] = $this->input->post('cuenta');
				$param['nombre'] = $this->input->post('nombre');
				$param['paterno'] = $this->input->post('paterno');
				$param['materno'] = $this->input->post('materno');
				$param['correo'] = $this->input->post('correo');
				$param['licen'] = $this->input->post('licen');
				//Usuario
				$paramsu['correo'] = $this->input->post('correo');
				$paramsu['clave'] = $this->encryption->encrypt($this->input->post('password'));
				$paramsu['clave1'] = $this->encryption->encrypt($this->input->post('password1'));

				$lastid = $this->mpersona->guardar($param);

				if($lastid > 0){
					$paramsu['idpersona'] = $lastid;
					if ($paramsu['clave'] ==$paramsu['clave1']) {
						$this->musuario->guardarusuario($paramsu);
						if (!is_dir('./uploads/'.$lastid)) {
							mkdir('./uploads/'.$lastid,0777,true);
						}
						redirect("clogin");
					}else{
						$data['mensaje'] ="Contrase&ntilde;a incorrecta"; 
						$this->load->view('persona/regpersona',$data);
					}
				}
			}else{
				$data['mensaje'] ="<h3>Datos incorrectos</h3>"; 
				$this->load->view('persona/regpersona',$data);
			}

			

		}
	}
?>