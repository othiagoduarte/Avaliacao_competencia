<?php

 function GetCidades(){
	
	$lista_cidades = array();
  	$novaCidade  = array();
  	$novaCidade['id'] = '1';
  	$novaCidade['nome'] = 'Porto Alegre';
  	$lista_cidades[] = $novaCidade;
 
  	$novaCidade  = array();
  	$novaCidade['id'] = '2';
  	$novaCidade['nome'] = 'Gravatai';
  	$lista_cidades[] = $novaCidade;
 
  	$novaCidade  = array();
  	$novaCidade['id'] = '3';
  	$novaCidade['nome'] = 'Alvorada';
  	$lista_cidades[] = $novaCidade;
  	
	return $lista_cidades;
}

function GetUfs(){
	   
  	$lista_estados = array();
  	$novoEstado  = array();
  	$novoEstado['id'] = '1';
  	$novoEstado['nome'] = 'Rio Grande do Sul';
  	$lista_Estados[] = $novoEstado;
 
 	return $lista_Estados;
 }

function GetUsuarios(){
		
	if (isset($_SESSION['lista_usuarios'])) {
		return $_SESSION['lista_usuarios'];
	}	
	
	$usuario_novo = array();
	$usuario_novo['id'] = '1';
	$usuario_novo['nome'] = 'Thiago Duarte';
	$lista_usuarios[] = $usuario_novo;
	
	$usuario_novo['id'] = '2';
	$usuario_novo['nome'] = 'João da Silva';
	$lista_usuarios[] = $usuario_novo;
	
	$usuario_novo['id'] = '3';
	$usuario_novo['nome'] = 'Mario Gomes';
	$lista_usuarios[] = $usuario_novo;
	
	$usuario_novo['id'] = '4';
	$usuario_novo['nome'] = 'Jose Silva';
	$lista_usuarios[] = $usuario_novo;
	
	$_SESSION['lista_usuarios'] = $lista_usuarios;
	
	return $lista_usuarios;
}