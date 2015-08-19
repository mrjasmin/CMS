<?php

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		$this->load->helper('text');
		$this->load->library('session');
		$this->load->library('encrypt');
		$this->load->helper('form');
		$this->load->model('settings'); 

		}
	
	public function index(){
		
		if($this->session->userdata('logged_in')){
			$this->load->view('index'); 
		}
		else {
			$this->load->view('login'); 
		}
		
		
	}
	
	public function settings(){
		$data_array['settings'] = $this->settings->get_settings(); 
		if($data_array[] != 
		$this->load->view('page_settings', $data_array); 
	}

	public function save_settings(){
		$settings_data = array('h2_header' => $_POST['title'], 'about_text'=> $_POST['about'], 'footer_text' => $_POST['footer']); 	
		$this->settings->set_settings($settings_data); 
	}

	function showUserInfo(){
		
	}
	
}