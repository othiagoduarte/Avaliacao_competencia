<?php	
	include "controller/login.php";	
	include "controller/dados.php";				 	
	
	$lista_usuarios = GetUsuarios();
	$indice = 0;
	
	include "view/listaUsuarios.php";