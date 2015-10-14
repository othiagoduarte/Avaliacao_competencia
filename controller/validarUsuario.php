	<?php	
	var_dump($_SESSION);		
	
	/*		
		if ( isset($_POST['usuario'])) {
			if ($_POST['usuario'])) {
				
			}
		}
		if ( isset($_POST['usuario'])) {
			if ($_POST['usuario'])) {
				
			}
		}
		if ( isset($_POST['usuario'])) {
			if ($_POST['usuario'])) {
				
			}
		}
		if ( isset($_POST['usuario'])) {
			if ($_POST['usuario'])) {
				
			}
		}
		if ( isset($_POST['usuario'])) {
			if ($_POST['usuario'])) {
				
			}
		}
		if ( isset($_POST['usuario'])) {
			if ($_POST['usuario'])) {
				
			}
		}
		
			*/
$usuario_novo = array();
$usuario_novo['id'] = '4';
$usuario_novo['nome'] = 'Jose Silva';

$_SESSION['lista_usuarios'][] =  $usuario_novo;

var_dump($_SESSION);		
//header("Location: /avaliacao_competencia/usuarios.php");
 