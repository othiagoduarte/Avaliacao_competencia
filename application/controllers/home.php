<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$logado = TRUE;
		$data = array();
		 
		if (! $logado) {
			$data['title'] = 'Login';
			$this->load->view('includes/header',$data);
			$this->load->view('includes/login');	
			$this->load->view('includes/footer');					
			return;
		} 
		
		$data['title'] = 'Bem vindo';
		
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu');
		$this->load->view('includes/footer');	
		
	}
	public function login(){
		
	}	
}