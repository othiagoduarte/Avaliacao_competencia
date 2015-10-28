<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	function __construct()
	{	
		parent::__construct();
		$this->load->model('Usuario','usuario');
	}
	
	function index()
	{	session_start();
			
		$data = array();
		$data['title'] = 'Login';	
		$this->load->view('includes/header',$data);
		$this->load->view('login');	
		
	}
	function logar()
	{		
		$this->usuario->usuario = $this->input->post('usuario');
		$this->usuario->senha = $this->input->post('senha');
		var_dump($this->input->post());
		if ($this->usuario->logar()) {
			$_SESSION['logado'] ==TRUE;
			header("Location: /avaliacao")	;
		}else {
			//header("Location: /avaliacao/login?err")	;
		}
			
	}
}