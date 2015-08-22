<?php

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$this->load->helper('text');
		$this->load->library('session');
		$this->load->library('encrypt');
		$this->load->helper('form');
		$this->load->model('settings'); 
		$this->load->model('page'); 
		$this->load->model('article'); 
		$this->load->model('user'); 

		}
	
	public function index(){
		
		if($this->session->userdata('logged_in')){

			$data_array['num_pages'] = $this->number_of_pages(); 
			$data_array['num_articles'] = $this->number_of_articles();
			$data_array['num_users'] = $this->number_of_users(); 


			$this->load->view('index', $data_array); 
		}
		else {
			$this->load->view('login'); 
		}
		
		
	}
	
	public function settings(){
		$data_array['settings'] = $this->settings->get_settings(); 
		$this->load->view('page_settings', $data_array); 
	}

	public function save_settings(){
		$settings_data = array('h2_header' => $_POST['title'], 'about_text'=> $_POST['about'], 'footer_text' => $_POST['footer']); 	
		$this->settings->set_settings($settings_data); 
	}

	function showUserInfo(){
		
	}

	private function number_of_pages(){
		return $this->page->count_pages(); 
	
	}

	private function number_of_articles(){
		return $this->article->count_articles(); 
	}

	private function number_of_users(){
		return $this->user->count_users(); 
	}

	
}