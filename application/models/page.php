<?php

class Page extends MY_Model {
	
	
	protected $_table_name = 'pages';
	protected $_primary_key= "page_id";
	protected $_order_by = "order"; 
	protected $_order_type ="ASC"; 
	
	
	public function insert_page($data){
		$this->save($data); 
	}
	
	public function get_pages($id=null){
		return $this->get($id); 
	}
	
	public function delete_page($id){
		$this->delete($id); 
	}

	public function update_page($data){
		$this->update($data); 
	}

	public function count_pages(){
		return $this->get_num_rows(); 
	}

}