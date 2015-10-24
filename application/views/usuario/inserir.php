<?php 
  
  $lista_cidades = GetCidades();;
  $lista_Estados = GetUfs();
 
 
?>
	<div class="row s12">
    <form class="col s12" action="./controller/validarUsuario.php" >
      <div class="row">
        <div class="input-field col s6">
          <input  id="Nome" type="text" class="validate" name="nome">
          <label >Nome</label>
        </div>
        <div class="input-field col s6">
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s4">
          <input  id="fone" type="text" class="validate">
          <label >Fone</label>
        </div>
        <div class="input-field col s4">
          <input  id="rg" type="text" class="validate">
          <label >RG</label>
        </div>
          <div class="input-field col s4">
          <input  id="CPF" type="text" class="validate">
          <label >CPF</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="pai" type="text" class="validate">
          <label for="pai">Pai</label>
        </div>
        <div class="input-field col s6">
          <input  id="mae" type="text" class="validate">
          <label >Mae</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input  id="endereco" type="text" class="validate">
          <label >Endereço</label>
        </div>
        <div class="col s3 ">
          <label>Cidade</label>
                <select class="browser-default" name="tipo"> 
                  <option value="0" disabled selected>Selecione</option>
                    <?php foreach ($lista_cidades as $cidade) : ?>
                      <option value= <?php  echo  	$cidade['id'];  ?> > 
                      <?php  echo 	$cidade['nome'];; ?></option>
                    <?php endforeach; ?>								  
                  </select>				    		
          </div>
           <div class="col s3 ">
          <label>Estado</label>
                <select class="browser-default" name="tipo"> 
                  <option value="0" disabled selected>Selecione</option>
                    <?php foreach ($lista_Estados as $estado) : ?>
                      <option value= <?php  echo  	$estado['id'];  ?> > 
                      <?php  echo 	$estado['nome'];; ?></option>
                    <?php endforeach; ?>								  
                  </select>				    		
          </div>       
      </div>
      <div class="row ">
        <div class="input-field col s6">
          <button class="btn waves-effect waves-light " type="submit" >Cadastrar
            <i class="material-icons right"></i>
          </button>
          </div>
       </div>
    </form>
  </div>
  