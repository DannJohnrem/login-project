<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		// public function login($email, $password){
		// 	$query = $this->db->get_where('users', array('email'=>$email, 'password'=>$password));
		// 	return $query->row_array();
		// }

		public function login($email) {
			
			$query = $this->db->query("SELECT `email`, `password`, `fname` FROM `users` WHERE `email` = ?", array( $email ));

			return $query->result_array();
		}

	}
?>