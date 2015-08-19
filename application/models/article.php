<?php

class article extends MY_Model {
	
	
	protected $_table_name = 'news';
	protected $_primary_key= "ID";
	protected $_order_by = "date"; 
	protected $_order_type ="ASC"; 
	
	
	public function insert_article($data){
		$this->save($data); 
	}
	
	public function get_articles($id=null){
		return $this->get($id); 
	}
	
	public function delete_article($id){
		$this->delete($id); 
	}

}