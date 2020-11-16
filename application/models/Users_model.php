<?php
	class Users_model extends CI_Model {

		function __construct() {
			parent::__construct();
			$this->load->database();
		}

		// public function login($email, $password){
		// 	$query = $this->db->get_where('users', array('email'=>$email, 'password'=>$password));
		// 	return $query->row_array();
		// }

		public function login($email, $password) {
			
			$query = $this->db->query("SELECT `email`, `password` FROM `users` WHERE `email`= ? AND `password` = ?", array($email, $password));

			return $query->result_array();
		}

		public function getRecords() {

			$query2 = $this->db->query("SELECT * FROM `users`");
			
			return $query2->result_array();
		}
	}
