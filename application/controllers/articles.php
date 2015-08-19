<?php

class Articles extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('article'); 
		$this->load->model('page'); 
		$this->load->helper('form'); 
		$this->load->helper('date'); 
	}
	
	function index(){
		$data_array['articles'] = $this->article->get_articles(); 

		$this->load->view('articles', $data_array); 
	}
	
	function new_article_form(){
		
		$this->load->view('new_article'); 
	}

	function new_article(){
		$data_array = array('title' => $_POST['title'], 
						'content' => $_POST['content'], 
						'date'=> now(), 
						'author'=> 'mrjasmin'); 

		
		$this->article->save($data_array); 

		redirect('articles'); 
	}
	
	function delete_article($id){
		$this->article->delete_article($id); 

		redirect('articles'); 
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