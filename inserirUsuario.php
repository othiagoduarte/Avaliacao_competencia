
<!--
  
  RG, CPF, Email, Nome, Mãe, End, Cidade, Estado, Login e Senha.
  
-->

<?php 
  
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
  
  
  $lista_estados = array();
  $novoEstado  = array();
  $novoEstado['id'] = '1';
  $novoEstado['nome'] = 'Rio Grande do Sul';
  $lista_Estados[] = $novoEstado;
  
?>
	<div class="row s12">
    <form class="col s12">
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
          <input id="pai" type="email" class="validate">
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
          <button class="btn waves-effect waves-light " type="submit" name="action">Cadastrar
            <i class="material-icons right">send</i>
          </button>
          </div>
       </div>
      
    </form>
  </div>
  <?php 
    
 
    
  ?>
    