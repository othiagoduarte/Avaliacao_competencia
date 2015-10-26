<div class="container-fluid">
  <div class="row s12">
    <form class="col s12" action="<?php echo base_url('usuarios/do_cadastrar')?>" method="POST" >
      <?php include "detalhe.php"?>
      <div class="row ">
        <div class="input-field col s8">
            <input  id="comentarios" type="text" class="validate" name="comentarios">
            <label >Comentarios</label>
          </div>
        <div class="input-field col s4">
          <button class="btn waves-effect waves-light " type="submit" >Cadastrar
            <i class="material-icons right"></i>
          </button>
          </div>
       </div>
    </form>
  </div>
</div>