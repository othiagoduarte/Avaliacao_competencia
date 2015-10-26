<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	
	function __construct()
	{	
		parent::__construct();
		$this->load->model('Usuario','usuario');
		$this->load->model('Cidade','cidade');
		$this->load->model('Uf','uf');
		$this->load->helper('url');		
	}

	public function index()
	{
		if (isset($_SESSION['logado']))
		{
			$logado = $_SESSION['logado'];
		}
		else
		{
			$logado = FALSE;
		}		
		
		$logado = TRUE; 										#Remover após a solução da sessão
			 
		if ( ! $logado )
		{
			header("Location: /avaliacao/login");
		}	
		
		$data = array();		
		$data['title'] = 'Bem vindo';
		$usuario = new Usuario();
		$data['usuario'] = $usuario;
		$data['lista_usuarios'] = $this->usuario->GetUsuarios();
		$data['lista_cidades'] = $this->cidade->GetCidades();
		$data['lista_Estados'] = $this->uf->GetUfs();

		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu');
		$this->load->view('usuario/listar');
		
	}
	public function teste()
	{
		var_dump($this->usuario->get(1));
	}
	public function editar()
	{
		$id = $this->input->get('id');
		$data = array();
		$data['title'] = 'Editar';		
		$data['usuario'] = $this->usuario->getbyId($id);
		$data['lista_cidades'] = $this->cidade->GetCidades();
		$data['lista_Estados'] = $this->uf->GetUfs();			
		
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu');
		$this->load->view('usuario/editar');

	}
	public function do_editar()
	{
		$retorno = $this->validarUsuario();
		
		if($retorno == "SUCESSO")
		{
			$model = $this->GetUsuarioInPost();
			$model->update();
			header("Location: /avaliacao"); #remover após revisar o fluxo de telas
			$data = array();
			$data['title'] = 'Editar';
			$data['mensagem'] = "Sucesso ao editar os dados do usuário";
			$data['usuario'] = $model;
			$data['lista_cidades'] = $this->cidade->GetCidades();
			$data['lista_Estados'] = $this->uf->GetUfs();			
			
			$this->load->view('includes/header',$data);
			$this->load->view('includes/menu');
			$this->load->view('usuario/listar');		
		}else
		{
			$data = array();
			$data['title'] = 'Editar';		
			$data['usuario'] = $this->GetUsuarioInPost();
			$data['lista_cidades'] = $this->cidade->GetCidades();
			$data['lista_Estados'] = $this->uf->GetUfs();			
		
			$this->load->view('includes/header',$data);
			$this->load->view('includes/menu');
			$this->load->view('usuario/editar');
			
		}				
	}
	public function excluir()
	{
		$id = $this->input->get('id');
		
		$data = array();
		$data['title'] = 'Deletar';
		$data['usuario'] =$this->usuario->getbyId($id);
		$data['lista_cidades'] = $this->cidade->GetCidades();
		$data['lista_Estados'] = $this->uf->GetUfs();			
		
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu');
		$this->load->view('usuario/excluir');

	}
	public function do_excluir()
	{
		$model =  $this->GetUsuarioInPost();
		$model->delete();
		header("Location: /avaliacao"); #remover após revisar o fluxo de telas
		$data = array();
		$data['title'] = 'Visualizar';
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu');
		
	}
	public function detalhe()
	{
		$id = $this->input->get('id');
		
		$data = array();
		$data['title'] = 'Visualizar';
		$data['usuario'] =$this->usuario->getbyId($id);
		$data['lista_cidades'] = $this->cidade->GetCidades();
		$data['lista_Estados'] = $this->uf->GetUfs();			
		
		$this->load->view('includes/header',$data);
		$this->load->view('includes/menu');
		$this->load->view('usuario/visualizar');

	}
	function do_cadastrar()
	{		
		$retorno = $this->validarUsuario();
		
		if ($retorno == "SUCESSO"){
			
			$model = $this->GetUsuarioInPost();	
			$model->insert();
			header("Location: /avaliacao"); #remover após revisar o fluxo de telas
			$data['title'] = 'Cadastro';
			$data['mensagem'] = "Sucesso ao cadastrar usuário";
			$data['usuario'] = $this->usuario->getbyId($this->usuario->lasId());		
			$data['lista_usuarios'] = $this->usuario->GetUsuarios();
			$data['lista_cidades'] = $this->cidade->GetCidades();
			$data['lista_Estados'] = $this->uf->GetUfs();

			$this->load->view('includes/header',$data);
			$this->load->view('includes/menu');
			$this->load->view('usuario/visualizar');
										
		}else{
			
			$data = array();
			$data['title'] = 'Editar';
			$data['usuario'] = GetUsuarioInPost();
			$data['lista_cidades'] = $this->cidade->GetCidades();
			$data['lista_Estados'] = $this->uf->GetUfs();			
			$data['mensagem'] = "Não foi possivel salvar os dados do usuario:<br>".$retorno;
			
			$this->load->view('includes/header',$data);
			$this->load->view('includes/menu');
			$this->load->view('usuario/editar');
		}
		
	}
	function GetUsuarioInPost()
	{
		$model = new Usuario();	
		$model->id = $this->input->post('id');
		$model->nome = $this->input->post('nome');
		$model->senha = $this->input->post('senha');
		$model->usuario = $this->input->post('usuario');
		$model->email = $this->input->post('email');
		$model->cpf = $this->input->post('cpf');
		$model->rg = $this->input->post('rg');
		$model->mae = $this->input->post('mae');;
		$model->endereco = $this->input->post('endereco');
		$model->estado = $this->input->post('estado');
		$model->cidade = $this->input->post('cidade');
		$model->telefone = $this->input->post('telefone');
		$model->pai = $this->input->post('pai');
		$model->comentario = $this->input->post('comentario');
				
		return $model;
	}
	
	function validarUsuario(){
				
		if ( $this->input->post('usuario') == "") {
			return "informe o usuario";			
		}
		if ( $this->input->post('senha') == "") {
			return "informe a senha";			
		}
		if ($this->input->post('confirmacaoSenha') == "") {
			return "Confirme a senha";			
		}
		if (!($this->input->post('confirmacaoSenha') == $this->input->post('senha')) ) {
			return "A senha confirmada esta diferente da senha informada";			
		}		
		if ($this->input->post('nome') == "") {
			return "Informe o nome do usuario";			
		}
		if ( $this->input->post('email') == "") {
			return "Informe o email do usuario";			
		}
		if ($this->input->post('rg') == "" ) {
			return "Informe o RG do usuario";			
		}
		if ($this->input->post('mae') == "") {
			return "Informe o nome da mãe do usuario";			
		}
		if ($this->input->post('endereco') == "") {
			return "Informar o endereço";			
		}
		if ($this->input->post('cidade') == "") {
			return "informar a cidade";			
		}
		if ($this->input->post('estado') == "") {
			return "informar a UF";			
		}				
		return "SUCESSO";
		 	
	}	
}