<?php

class Articles extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('article'); 
		$this->load->model('page'); 
	}
	
	function index(){
		$data_array['articles'] = $this->article->get_articles(); 

		$this->load->view('homepage', $data_array); 
	}
	
	function new_article(){
		//$data_array = array('page_id'=>2, 'name'=>'tasesting', 'text'=>"A page asabout programming", 'order'=>4);
		//$this->page->insert_page($data_array); 
		
	}
	
	function delete_article($id){
		//$this->page->delete_page($id); 
	}
	
	function edit_article(){
	
	}


	function single_article($id){
		
		$data_array['articles'] = $this->article->get_articles(); 
		$data_array['article'] = $this->article->get_articles($id);
		$data_array['pages'] = $this->page->get_pages(); 
		
		$this->load->view('single_article', $data_array); 

	}
	
}