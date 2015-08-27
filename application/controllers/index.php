<?php

class Index extends My_Controller {
	
	function __construct(){
		parent::__construct(); 
		$this->load->model('page'); 
		$this->load->model('article'); 
		$this->load->model('settings'); 

	}
	
	function index(){

		$this->load->library('pagination'); 

		$config['base_url'] = site_url().'/index'; 
		$config['total_rows'] = $this->db->get('news')->num_rows(); 
		$config['per_page'] = 2;
		$config['num_links'] = 10; 

		$this->pagination->initialize($config); 

		//$data_array['articles'] = $this->db->get('news', $config['per_page'], $this->uri->segment(3)); 

		$data_array['articles'] = $this->article->get_articles(); 
		$data_array['pages'] = $this->page->get_pages(); 
		$data_array['settings'] = $this->settings->get_settings(); 
		
		$this->load->view('homepage', $data_array); 

	}


	
}

?>