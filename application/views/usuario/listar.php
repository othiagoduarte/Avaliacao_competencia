<div class="container">
	<h4 class="center">Lista de usuarios</h4>
	<table  class="bordered " >
		<tr>
			<th>#</th>	
			<th>Nome</th>
			<th>Detalhe</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>
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
		<?php include "inserir.php" ?>	
		</div>
	</div>
	<!-- Modal Structure - Editar Usuario -->
	<div id="editarUsuario" class="modal">
		<div class="modal-content">
			<?php include "editar.php" ?>	
		</div>
	</div>
	<!-- Modal Structure - Excluir Usuario -->
	<div id="excluirUsuario" class="modal">
		<div class="modal-content">
			<?php include "excluir.php" ?>	
		</div>
	</div>
	<!-- Modal Structure - Excluir Usuario -->
	<div id="detalhesUsuario" class="modal">
		<div class="modal-content">
			<?php include "detalhe.php" ?>	
		</div>
	</div>
	</div>
</div>