<!DOCTYPE html>
<html lang="pt">	
<head>	
		
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/index.css">
                    	<!-- JS  -->
        <script src="js/jquery.js"></script>
        <script src="js/materialize.js"></script>

        <title>Bem vindo</title>

	</head>
        <body>
                <div class="container-fluid">
                        
                        <div class="row">
                        </div>
                        <div class="row">
                                <h1>Login</h1>
                                <form action="usuarios.php" method="POST" >
                                        <div class="row">
                                                <div class="input-field col s12">
                                                <input id="Usuario" type="text" name="usuario" >
                                                <label for="Usuario">Usuario</label>
                                        </div>
                                        <div class="row">
                                                <div class="input-field col s12">
                                                        <input id="senha" type="password" name="senha"  >
                                                        <label for="senha">senha</label>
                                                </div>
                                        </div>
                                        <div class="row ">
                                                <div>
                                                        <input class="btn" type="submit" value="Log in" >                                
                                                </div>
                                        </div>
                                </form>
                        </div>                        
                </div>
        <footer>
        </footer>
        <script src="js/usuarios.js"></script>
        </body>
	
</html>