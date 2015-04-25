<?php
if (!defined('BASEPATH'))	exit('No direct script access allowed');
class Model extends CI_Model{
	
	function __construct(){
	 		
	 	parent::__construct();
		 
		 
	 }
	
	function add_data($tab, $data){
		$this->db->insert($tab, $data);
		return;
		
	}// end of add_record() 
	
	function get_data_by_id($id, $item_id_name, $tab){
        $this->db->where($item_id_name, $id);
        return $this->db->get($tab);
    }
	
	
	function update_product(){
		$this->db->where('prod_id', $this->uri->segment(3));
		$this->db->update('products_tbl', $data); 
		
	}
	
	function delete_record($id){
		
		$this->db->where('prod_id', $this->uri->segment(3));
		$this->db->delete('products_tbl'); 
	
	}
	
	// get number of products in database
    function count_all($tab){
        
		return $this->db->count_all($tab);
    }
    // get products with paging
   
    function get_data_list($tab, $item_id, $limit, $offset)
	{
        
		$this->db->order_by($item_id,'desc');
        
		return $this->db->get($tab, $limit, $offset);
    }
	
	
	function validate(){
	
		$this->db->where('username', $this->input->post('username'));	
		$this->db->where('password', $this->input->post('password'));
		$query= $this->db->get('logins_tbl');
		if($query->num_rows==1){
		
			return true;	
		}	
	}
	
	
	function send_request($data){
			
		$insert=$this->db->insert('contacts_tbl',$data);
		return $insert;
		
	}
	
}


?>