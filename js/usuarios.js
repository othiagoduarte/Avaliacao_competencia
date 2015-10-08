$(document).ready(function()
{
	selecionar();
	editarUsuario();
	excluirUsuario();
	cadastrarUsuario();
	detalhesUsuario();		
});
function editarUsuario($codProduto){

	var btnModal=$('#btnEditar');
	
	btnModal.unbind('click');
	btnModal.bind('click',function()
	{
		var modal=$('#editarUsuario');
		
		modal.css('max-height',700);
		modal.openModal();		
			
	});	
	
}
function cadastrarUsuario(){

	var btnModal=$('#btnCadastrar');
	
	btnModal.unbind('click');
	btnModal.bind('click',function()
	{
		var modal=$('#cadastrarUsuario');
		
		modal.css('max-height',700);
		modal.openModal();		
			
	});
}
function detalhesUsuario(){

	var btnModal=$('#btnDetalhes');
	
	btnModal.unbind('click');
	btnModal.bind('click',function()
	{
		var modal=$('#detalhesUsuario');
		
		modal.css('max-height',700);
		modal.openModal();		
			
	});
}


function excluirUsuario(){

	var btnModal=$('#btnExcluir');
	
	btnModal.unbind('click');
	btnModal.bind('click',function()
	{
		var modal=$('#excluirUsuario');
		
		modal.css('max-height',700);
		modal.openModal();		
			
	});
	
}
function selecionar(){

    $('select').material_select();

  }

