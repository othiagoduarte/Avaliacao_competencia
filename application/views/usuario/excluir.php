<div class="container-fluid">
  <div class="row s12">
    <div class="row">
      <br>
      <div class="center">
        <b>  <?php echo isset($mensagem)?$mensagem:"Excluir usuário"; ?> <b>
      </div>
    <form class="col s12" action="<?php echo base_url('usuarios/do_excluir')?>" method="POST" >
      <?php include "detalhe.php"?>
      <div class="row ">
        <div class="input-field col s10">
            <input  id="comentarios" type="text" class="validate" name="comentarios">
            <label >Comentarios</label>
          </div>
        <div class="input-field col s2">
          <button class="btn waves-effect waves-light red" type="submit" >Excluir
            <i class="material-icons right"></i>
          </button>
          </div>
       </div>
    </form>
  </div>
</div>