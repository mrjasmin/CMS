<?php

class Pages extends My_Controller {
	
	function __construct(){
		parent::__construct(); 
		$this->load->model('page'); 
		$this->load->helper('text');
		$this->load->library('session');
		$this->load->library('encrypt');
		$this->load->helper('form');
		$this->load->library('form_validation');
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
	
	function new_page_form(){
		$this->load->view('new_page'); 
		
	}

	function new_page(){
		$data_array = array('name' => $_POST['title'], 
						'text' => $_POST['content'], 
						'order'=> $_POST['order']); 

		
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
					),
					array(
						'field'=>'order',
						'label'=>'order',
						'rules'=>'trim|required'
					)
		); 

		$this->form_validation->set_rules($config);
		$validation = $this->form_validation->run();

		if($validation == FALSE){
			$this->new_page_form(); 
		}	
		else {
			
			$this->page->save($data_array); 
			redirect('pages'); 
		}

	}

	
	function delete_page($id){
		$this->page->delete_page($id); 
		$data_array['pages'] = $this->page->get_pages(); 
		
		redirect('pages'); 

	}
	
	function edit_page_form($id){
		$data_array['page'] = $this->page->get_pages($id);
		$this->load->view('edit_page', $data_array); 
	}

	function edit_page($id){

		$data_array['pages'] = $this->page->get_pages(); 

		$new_data = array('page_id' => $id, 'name'=> $_POST['title'], 'order' => $_POST['order'], 'text' => $_POST['content']); 
		$this->page->update_page($new_data); 
		
		redirect('pages'); 

	}

}

?>