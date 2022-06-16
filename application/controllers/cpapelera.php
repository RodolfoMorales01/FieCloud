<?php
	class Cpapelera extends CI_controller{
		
		function __construct(){
			parent::__construct();
			$this->load->model('mpapelera');
		}
		function index(){
			$lastid = $this->session->userdata('s_idPersona');
			$datos['result'] = $this->mpapelera->getArchivo($lastid);
			$datos['folder'] = $this->mpapelera->getfolder($lastid);
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('vpapelera',$datos);
			$this->load->view('layout/footer');
		}

		function restaurarfolder(){
			$folder = $this->uri->segment(3);
			echo $this->mpapelera->restaurarfolder($folder);
			redirect('cpapelera');
		}

		function restaurarfile(){
			$file = $this->uri->segment(3);
			echo $this->mpapelera->restaurarfile($file);
			redirect('cpapelera');
		}

		function eliminardefinitivo($name){
			$lastid = $this->session->userdata('s_idPersona');
			$file= urldecode($name);
			echo $file;
			unlink("./uploads/".$lastid."/".$file);
			echo $this->mpapelera->filedefinitivo($file);
			redirect('cpapelera');
		}

		function eliminardefinitivofolder($name2){
			$lastid = $this->session->userdata('s_idPersona');
			$folder= urldecode($name2);
			echo $folder;
			rmdir("./uploads/".$lastid."/".$folder);
			echo $this->mpapelera->folderdefinitivo($folder);
			redirect('cpapelera');
		}
	}
?>