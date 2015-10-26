<div>
	<div class="container-fluid">
		<div class="row ">
			<form action="login/logar" method="POST" >
				<h1 >Login</h1>
				<?php echo isset($_GET['err'])?'<p><b class"red">senha inválida</b></p>':'<p>Bem vindo</p>';?>
				<div class="row">
					<div class="input-field col s12">
						<input id="Usuario" type="text" name="usuario" >
						<label for="Usuario">usuario</label>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="senha" type="password" name="senha"  >
							<label for="senha">senha</label>
						</div>
					</div>
					<div class="row ">
						<div class="input-field col s12">
							<input class="btn" type="submit" value="Log in" >                                
					</div>
				</div>
			</form>
		</div>                        
	</div>
</div>