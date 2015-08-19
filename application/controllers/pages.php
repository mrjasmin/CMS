<?php

class Pages extends My_Controller {
	
	function __construct(){
		parent::__construct(); 
		$this->load->model('page'); 
		$this->load->helper('text');
		$this->load->library('session');
		$this->load->library('encrypt');
		$this->load->helper('form');
	}
	
	function index(){
		
		if($this->session->userdata('logged_in')){
			//$this->load->view('pages'); 
			$data_array['pages'] = $this->page->get_pages(); 
			
			$this->load->view('pages', $data_array); 
		}
		else {
			$this->load->view('login'); 
		}

	}

	function single_page($id){
		
		$data_array['pages'] = $this->page->get_pages(); 
		$data_array['page'] = $this->page->get_pages($id);
		$this->load->view('single_page', $data_array); 

	}
	
	function new_page(){
		$data_array = array('page_id'=>2, 'name'=>'tasesting', 'text'=>"A page asabout programming", 'order'=>4);
		$this->page->insert_page($data_array); 
		
	}
	
	function delete_page($id){
		$this->page->delete_page($id); 
	}
	
	function edit_page(){
	
	}


	
}

?>