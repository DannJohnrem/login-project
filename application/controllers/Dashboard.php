<?php 

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Users_model');
	}
    public function home() {

		$data['users'] = $this->Users_model->getRecords();
		 
		//  echo '<pre>';
		//  	print_r($records);
		//  echo '</pre>';
		$this->load->view('dashboard', $data);
		
	}
}
