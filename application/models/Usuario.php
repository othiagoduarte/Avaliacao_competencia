<?php

defined('BASEPATH') OR exit('No direct script access allowed');
	
class Usuario extends CI_Model {

	public $id = "";
	public $nome = "";
	public $senha = "";
	public $usuario = "";
	public $email = "";
	public $rg = "";
	public $cpf = "";
	public $mae ="";
	public $endereco = "";
	public $estado = 0;
	public $cidade = 0;
	public $telefone = ""; 
	public $pai = "";
	public $comentario = "";
  	
	public function __construct(){
	   	parent::__construct();
	   	$this->load->helper('url');
		$this->load->helper('file');
		$this->load->library('arquivo','arquivo');	
	}
			
	function GetUsuarios(){
			
		$usuarios = array();
		$usuariosJson = $this->arquivo->lerArquivo();
		
		if ( Count($usuariosJson) > 0 )
		{
			foreach ($usuariosJson as $json) {
				$usuarios[] = json_decode($json);
			}			
		}		
				
		return $usuarios;
	}
	public function lasId()
	{
		return Count($this->GetUsuarios());
	}	    
	public function getbyId($id)	{
		
		$usuarios =  $this->GetUsuarios();
		
		foreach ($usuarios as $usuario) 
		{
			if ($usuario->id == $id ) 
			{
				return $usuario;
			}
		}
		return new Usuario(); 
	}
	public function getbyUsuario($Usuario)	{
		
		$usuarios =  $this->GetUsuarios();
		
		foreach ($usuarios as $Usuario) 
		{
			if ($usuario->usuario == $Usuario ) 
			{
				return $usuario;
			}
		}
		return new Usuario(); 
	}
		
	public function insert()
	{		
		$this->id = count($this->GetUsuarios()) + 1;
		$json = json_encode($this);
		$this->arquivo->insert($json);
	}	
	public function update()
	{
		$usuarios =  $this->GetUsuarios();
		$usuariosJson = array();
		
		var_dump($usuarios);
		foreach ($usuarios as $usuario)
		{
			var_dump($usuario);
			var_dump($this);
			if ($usuario->id == $this->id) {
				
				var_dump($usuario);
				$usuario = $this;
				var_dump($usuario);
				
			}
			
			$usuariosJson[]	= json_encode($usuario);
		}
		var_dump($usuariosJson);
		$this->arquivo->update($usuariosJson);
	}
	public function delete()
	{
		$usuarios =  $this->GetUsuarios();
		$usuariosJson = array();
		
		foreach ($usuarios as $usuario)
		{		
			if ($usuario->id != $this->id) {
				$usuario->id = Count($usuariosJson) + 1;
				$usuariosJson[]	= json_encode($usuario);
			}		
		}
		
		$this->arquivo->update($usuariosJson);
	}
	function logar(){
		#verifica se o arquivo esta vazio
		if (count($this->arquivo->lerArquivo()) > 0) {
			$usuario = $this->getbyUsuario($this->usuario);
			return $usuario->usuario === $this->usuario && $usuario->senha ===$this->senha;
		}
		else{
			return $this->usuario === 'admin' && $this->senha === 'admin' ;		
		}		
	}
}