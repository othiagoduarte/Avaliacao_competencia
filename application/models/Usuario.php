<?php

defined('BASEPATH') OR exit('No direct script access allowed');
	
class Usuario extends CI_Model {

	public $id = '';
	

   	public function __construct(){
	   parent::__construct();
   	}
	
	public function ConectarDB(){
		return $this->load->database();
	}
    	    
	public function getProdutos($idProduto = 0)
	{
		$lista =array();
		
		if ($this->ConectarDB()) {
					
			$query = $this->db->get();
						
			if(count($query) > 0){
				foreach ($query->result_array() as  $produto) {
												
					$Model=new Produtos();
					
					$Model->id         = $produto['id'];
					
	   				array_push($lista, $Model);
				}
			}			
		}
		
		return $lista;
	}
		
	public function insert(){
		
		$this->ConectarDB();
		$data= array();
		
		$data['id']		   = $this->id;          
		$this->db->insert('tabela', $data);
	}	
	public function update(){
		$this->ConectarDB();
		$this->db->update('tabela', $this, array('id' => $this->id));
	}
	public function delete(){
		$this->ConectarDB();
		$this->db->where('id', $this->id);
		$this->db->delete('tabela');
	}
	public function BeginTrans(){
		$this->db->trans_start();	
	}
	public function Rollback(){
		$this->db->trans_off();	
	}
	public function commit(){
		$this->db->trans_complete();
	}
}