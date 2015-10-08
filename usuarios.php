	<?php	
		
		//var_dump($_REQUEST);
		
			if ( isset($_POST['usuario'])  && isset($_POST['senha']) ) {
				
				
				$usuario = $_POST['usuario'];
				$senha = $_POST['senha'];
				
				if ( ! ( $usuario == "thiago" ||  $senha =="12345" )) {
					header("Location: http://localhost:8080/avaliacao_competencia/index.php?r=1")	;
					$_SESSION['logago'] = FALSE;
					
				}
				$_SESSION['logago'] = TRUE;
				
			}else{
				header("Location: http://localhost:8080/avaliacao_competencia/index.php?r=2")	;
				$_SESSION['logago'] = FALSE;
			}
		
		var_dump($_REQUEST);
				
	?>
<!DOCTYPE html>
<html lang="pt">	
	<head>	
		
		<meta charset="utf-8">
	
   	 	<!-- CSS  -->
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    	<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    	    
    	<!-- JS  -->
		<script src="js/jquery.js"></script>
    	<script src="js/materialize.js"></script>
 		<title>
                Sistema de Gerenciamento
        </title>
	</head>
	<body>	
		<nav>
			<div class="nav-wrapper black">
				<p>SISTEMA DE GERENCIAMENTO <?php  echo date("m.d.y");  ?></p>		
			</div>
		</nav>
	<div class="container">
		<h4 class="center">Cadastro de usuarios </h4>
		<table  class="bordered " >
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Detalhe</th>
				<th>Editar</th>
				<th>Excluir</th>
			</tr>
			
			<?php $indice = 0; 
				$lista_usuarios = array();
				$usuario_novo = array();
				$usuario_novo['id'] = '1';
				$usuario_novo['nome'] = 'THAIGO DUARTE';
				$lista_usuarios[] = $usuario_novo;
				
				$usuario_novo['id'] = '2';
				$usuario_novo['nome'] = 'THAIGO DUARTE';
				$lista_usuarios[] = $usuario_novo;
				
				$usuario_novo['id'] = '3';
				$usuario_novo['nome'] = 'THAIGO DUARTE';
				$lista_usuarios[] = $usuario_novo;
				
				$usuario_novo['id'] = '4';
				$usuario_novo['nome'] = 'THAIGO DUARTE';
				$lista_usuarios[] = $usuario_novo;
				
					?>
			<?php foreach ($lista_usuarios as $usuario) : ?>
					<tr>
						<td> <?php echo $usuario['id'] ?> </td>
						<td> <?php echo $usuario['nome'] ?></td>
						<td> <a class="btn-floating btn-small" id="btnDetalhes"  ><i  class="material-icons">toc</i></a></td>
						<td> <a class="btn-floating btn-small" id="btnEditar"  ><i  class="material-icons">mode_edit</i></a></td>
						<td> <a class="btn-floating btn-small red" id="btnExcluir"  ?><i  class="material-icons">delete</i></a></td>					
					</tr>
			<?php endforeach; ?>
		</table>
		<div class="fixed-action-btn modal-trigger  " style="bottom: 45px; right: 24px;">
			<a class="btn-floating btn-large">
				<i class="large material-icons" id="btnCadastrar">add</i>
			</a>
		</div>
				<!-- Modal Structure - Cadastrar Novo Usuario -->
		<div id="cadastrarUsuario" class="modal">
			<div class="modal-content">
			<?php include "inserirUsuario.php" ?>	
			</div>
		</div>
		<!-- Modal Structure - Editar Usuario -->
		<div id="editarUsuario" class="modal">
			<div class="modal-content">
				<?php include "editarUsuario.php" ?>	
			</div>
		</div>
		<!-- Modal Structure - Excluir Usuario -->
		<div id="excluirUsuario" class="modal">
			<div class="modal-content">
				<?php include "excluirUsuario.php" ?>	
			</div>
		</div>
		<!-- Modal Structure - Excluir Usuario -->
		<div id="detalhesUsuario" class="modal">
			<div class="modal-content">
				<?php include "detalhesUsuario.php" ?>	
			</div>
		</div>
		</div>
	</div>
	</body>
	<!--JS-->
	<script src="js/usuarios.js"></script>
</html>