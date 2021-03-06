<?php

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('encrypt');
		$this->load->model('user');
	}
	
	function index(){

		if($this->session->userdata('logged_in')){
			$data_array['users'] = $this->user->get_users(); 
		    $this->load->view('users', $data_array); 
		}
		else {
			$this->load->view('login'); 
		}

	}
	
	function login_(){
		if($this->session->userdata('logged_in')){
			$data['users'] = $this->user->get_users(); 
			$this->load->view('index', $data); 
		}
		else {
			$this->login(); 
		}
	}
    
	private function login(){
		
			$config = array(
					array(
						'field'=>'username',
						'label'=>'username',
						'rules'=>'trim|min_length[6]|required'
					),
					array('field'=>'password',
						'label'=>'password',
						'rules'=>'trim|min_length[6]|required'
					)
				); 
			
			$this->form_validation->set_rules($config);
			$validation = $this->form_validation->run();
		
			if ($validation == FALSE)
			{
				$this->load->view('login.php');
			}
			else
			{	
				$result = $this->user->login($_POST['username'], $_POST['password']);
				$data['error'] = 0;
			
				if($result != 0){
					$session_data = array(
									'username'=> $_POST['username'],
									'logged_in'=> TRUE); 
				     
				 
                    $data["name"] = $_POST['username']; 


					$this->session->set_userdata($session_data); 

					redirect('admin/dashboard'); 
				}
				else {
				   
					$data['error'] = 1;
					$this->load->view('login', $data); 
				}
			}
	}
	
	function logout(){
		$this->user->logout(); 
		redirect(base_url('users/login_/')); 
	}

}