<?php

if ( ! ( isset($_SESSION['logago']) && $_SESSION['logago'] == true)){
		
	if ( isset($_POST['usuario'])  && isset($_POST['senha']) ) {
		if ( ! validarUsuario($_POST['usuario'],$_POST['senha']) ){
			header("Location: /avaliacao_competencia/index.php?err=s");
		}	
	}else{
		header("Location: /avaliacao_competencia/index.php?")	;
	}
}	

function validarUsuario($usuario,$senha){
			
	if ( ( $usuario == 'admin' && $senha == 'admin')){
		if (session_start()) {
			echo "Sessão iniciada";
		}
				
		$_SESSION['usuario'] =$usuario;
		$_SESSION['logago'] = TRUE;
		var_dump($_SESSION);
		
		return true;
	}
	
	return false;
}

		