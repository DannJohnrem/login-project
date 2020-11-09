<?php 

class Dashboard extends CI_Controller {

    public function home() {


		//load session library
		$this->load->library('session');
		
		//restrict users to go to home if not logged in
		if($this->session->userdata('user')) {
			$this->load->view('dashboard');
		}
		else{
			redirect('/');
		}
		
	}
}
