<?php

class Settings extends MY_Model {
	
	
	protected $_table_name = 'settings';
	protected $_primary_key= "";
	protected $_order_by = ""; 
	protected $_order_type =""; 
	
	
	public function get_settings(){
		return $this->get(); 
	}

	public function set_settings($data){
		if($this->get() == null){
			$this->save($data); 
		}
		else {
			//Update row in database
		}
	}
	
}

?>