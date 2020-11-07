<?php

class User extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index() {

		//restrict users to go back to login if session has been set
		if($this->session->userdata('user')) {
			redirect('dashboard/home');
		}
		else{
			$this->load->view('login_page');
		}
	}

	public function login() {

		//load library
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		
		if ($this->form_validation->run() === FALSE) {

			$this->form_validation->set_message('required', 'Oops this is required');
			$this->load->view('login_page');

		} else {
			// get username
			$email = $_POST['email'];
			// get password
			$password = $_POST['password'];
			// login user
			$data = $this->users_model->login($email, $password);
		

				if($data){
					$this->load->library('session');
					$this->session->set_userdata('user', $data);
					$output['message'] = 'Logging in. Please wait...';
				}
				else{
					$output['error'] = true;
					$output['message'] = 'Login Invalid. User not found';
				}
			}
			echo json_encode($output); 
		
	}

	public function logout() {
		
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect('/');
	}

}
