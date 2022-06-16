<?php defined('BASEPATH') OR exit('No direct script access allowed');

class cPrueba extends CI_Controller 
{
	function __construct()
	{
		parent:: __construct();
	}

	function index(){
		$this->load->view("layout/header");
		$this->load->view("layout/menu");
		$this->load->view("prueba");
		$this->load->view("layout/footer");
	}
}