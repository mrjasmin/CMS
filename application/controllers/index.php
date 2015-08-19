<?php

class index extends My_Controller {
	
	function __construct(){
		parent::__construct(); 
		$this->load->model('page'); 
		$this->load->model('article'); 
		$this->load->model('settings'); 
	}
	
	function index(){

		$data_array['articles'] = $this->article->get_articles(); 
		$data_array['pages'] = $this->page->get_pages(); 
		$data_array['settings'] = $this->settings->get_settings(); 
		
		$this->load->view('homepage', $data_array); 

	}
	
}

?>