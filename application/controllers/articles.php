<?php

class Articles extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('article'); 
		$this->load->model('page'); 
		$this->load->helper('form'); 
		$this->load->helper('date'); 
		$this->load->library('form_validation');
	}
	
	function index(){
		
		if($this->session->userdata('logged_in')){
			$data_array['articles'] = $this->article->get_articles(); 
			$this->load->view('articles', $data_array); 
		}
		else {
			$this->load->view('login'); 
		}

	}
	
	function new_article_form(){
		
		$this->load->view('new_article'); 
	}

	function new_article(){
		$data_array = array('title' => $_POST['title'], 
						'content' => $_POST['content'], 
						'date'=> now(), 
						'author'=> 'mrjasmin'); 

	    $config = array(
					array(
						'field'=>'title',
						'label'=>'title',
						'rules'=>'trim|required'
					),
					array(
						'field'=>'content',
						'label'=>'content',
						'rules'=>'trim|required'
					)
					
		); 

		$this->form_validation->set_rules($config);
		$validation = $this->form_validation->run();

		if($validation == FALSE){
			$this->new_article_form(); 
		}	
		else {
			
			$this->article->save($data_array); 
			redirect('articles'); 
		}
		

		
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