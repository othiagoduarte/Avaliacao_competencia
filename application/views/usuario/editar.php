	<div class="container-fluid">
   <div class="row">
    <div class="row">
      <br>
      <div class="center">
        <b>  <?php echo isset($mensagem)?$mensagem:"Editar os dados do usuario"; ?> <b>
      </div>
    </div>
     <form class="col s12" action="<?php echo base_url('usuarios/do_editar')?>" method="POST">
        <?php include "detalhe.php"?>
        <div class="row ">
          <div class="input-field col s10">
            <input  id="comentarios" type="text" class="validate" name="comentarios">
            <label >Comentarios</label>
          </div>
          <div class="input-field">
            <div class="col s2">
                     <button class="btn waves-effect waves-light " type="submit" >Salvar
                <i class="material-icons"></i>
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>