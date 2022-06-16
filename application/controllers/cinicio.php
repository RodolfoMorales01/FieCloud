<?php 
	class Cinicio extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('mupload');
			$this->load->model('mfolder');
			$this->load->helper('url');
			$this->load->helper('download_helper');
			$this->load->helper('date_helper');
			$this->load->helper('file_helper');
			if (!$this->session->userdata('s_usu')) {
            redirect('clogin');
        }
		}

		function index(){
			$datos['errorArch'] = '';
			$lastid = $this->session->userdata('s_idPersona');
			$ruta = opendir('./uploads/'.$lastid);
			$datos['size'] = $this->mupload->getsize($lastid);
			$datos['result']=$this->mupload->getArchivo($lastid);
			$datos['folder'] = $this->mfolder->getfolder($lastid,$ruta);
			$this->load->view('layout/header');
			$this->load->view('layout/menu');
			$this->load->view('vinicio',$datos);
			$this->load->view('layout/footer');
		}

		function CrearDir(){
			$lastid = $this->session->userdata('s_idPersona');
			$carpeta = $this->input->post('carpeta');
			$tipo = "Carpeta de archivos";
			$estado = "Agregado";
			$date = date('Y-m-d H:m:s');
			$dir ='./uploads/'.$lastid."/".$carpeta;
			if (!file_exists($dir)) {
				mkdir($dir,0777,true);
				$this->mfolder->crearfolder($carpeta,$dir,$tipo,$estado,$date,$lastid);
			}
			$datos['folder'] = $this->mfolder->getfolder($lastid);
			redirect('cinicio',$datos);
		}

		function cargarArchivo(){
			$lastid = $this->session->userdata('s_idPersona');
			$datos['result']=$this->mupload->getArchivo($lastid);
			if (isset($archivo)){
				$datos['result']=$this->mupload->getArchivo($lastid);
				$datos['folder'] = $this->mfolder->getfolder($lastid);	
				redirect('cinicio',$datos);
			}else{
				$lastid = $this->session->userdata('s_idPersona');
				$config['upload_path'] = './uploads/'.$lastid;
		        $config['allowed_types'] = 'pdf|docx|pptx|xlsx|rar|zip|jpg|gif|png|txt';
		        $this->load->library('upload',$config);

		        if (!$this->upload->do_upload("fileImagen")) {
		            $datos['errorArch'] = $this->upload->display_errors();
					$lastid = $this->session->userdata('s_idPersona');
					$datos['folder'] = $this->mfolder->getfolder($lastid);
					$this->load->view('layout/header');
					$this->load->view('layout/menu');
					$this->load->view('vinicio',$datos);
					$this->load->view('layout/footer');
		        } else {

		        	$file_info = $this->upload->data();
		           
		            $archivo = $file_info['file_name'];
		            $tamaño = $file_info['file_size'];
		            $tipo = $file_info['file_type'];
		            $date = date('Y-m-d H:i:s');
		            $ruta= $config['upload_path'];
		            $estado = "Agregado";
		            $lastid = $this->session->userdata('s_idPersona');
		            $this->mupload->subir($archivo,$tamaño,$tipo,$ruta,$date,$estado,$lastid);
		            $datos['estado'] = "Archivo subido.";
		            $datos['archivo'] = $archivo;
					$datos['error'] = "";
					$datos['errorArch'] = "";

					$datos['result']=$this->mupload->getArchivo($lastid);
					$datos['folder'] = $this->mfolder->getfolder($lastid);
		            $this->load->view('layout/header');
					$this->load->view('layout/menu');
					redirect('cinicio',$datos);
					$this->load->view('layout/footer');
		        }
        	}
		}
		function downloads($name){ 	
			$this->load->helper('file_helper');
			$lastid = $this->session->userdata('s_idPersona');
       		$data = file_get_contents('./uploads/'.$lastid.'/'.urldecode($name)); 
       		force_download($name,$data); 
		}

		function eliminar(){
			$file = $this->uri->segment(3);
			echo $this->mupload->eliminar($file);
			redirect('cinicio');
		}

		function eliminarfolder(){
			$folder = $this->uri->segment(3);
			echo $this->mfolder->eliminarfolder($folder);
			redirect('cinicio');
		}
		
		function Compartir(){
			$archivo=$this->uri->segment(3);
			echo $this->mupload->compartir($archivo);
			redirect('cinicio');
		}



/////////////////////////////////////////////////////////////////////Entrar a carpeta///////////////////////////////////////////////////////////////
		function ruta(){
			$str=$this->input->get('code');
			if(file_exists($str)){
				$ruta=$str;
			}else{
				$lastid=$this->session->userdata('s_idPersona');
				$ruta= "./uploads/".$lastid;
			}
			if (is_dir($ruta)){
	 			$gestor = opendir($ruta);// Abre un gestor de directorios para la ruta indicada
	 			echo "";
				while ($folder = readdir($gestor)){
					$folder;
					if ($folder != "." && $folder != "..") {
						echo"";
					}
				}

				function CrearDir1($ruta){
					$lastid = $this->session->userdata('s_idPersona');
					$carpeta = $this->input->post('carpeta');
					$tipo = "Carpeta de archivos";
					$estado = "Agregado";
					$date = date('Y-m-d H:m:s');
					$dir =$ruta."/".$carpeta;
					if (!file_exists($dir)) {
						mkdir($dir,0777,true);
						$this->mfolder->crearfolder($carpeta,$dir,$tipo,$estado,$date,$lastid);
					}
					$datos['errorArch'] = '';
					$lastid=$this->session->userdata('s_idPersona');
					$datos['result']=$this->mupload->getArchivo1($lastid,$ruta);
					$datos['folder'] = $this->mfolder->getfolder1($lastid,$ruta);
					$this->load->view('layout/header');
					$this->load->view('layout/menu');
					$this->load->view('vinicio2',$datos);
					$this->load->view('layout/footer');	
				}

				$datos['errorArch'] = '';
				$lastid=$this->session->userdata('s_idPersona');
				$datos['result']=$this->mupload->getArchivo1($lastid,$ruta);
				$datos['folder'] = $this->mfolder->getfolder1($lastid,$ruta);
				$this->load->view('layout/header');
				$this->load->view('layout/menu');
				$this->load->view('vinicio2',$datos);
				$this->load->view('layout/footer');	
				closedir($gestor);
				echo"";
			}
		}

		
	}
?>