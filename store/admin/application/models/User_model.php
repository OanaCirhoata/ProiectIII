
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	
	function verify_login($postData)
	{
		$this->db->select('*');
		$this->db->where('email', $postData['email']);
		$this->db->where('parola', md5($postData['password']));

		$query = $this->db->get('clienti');

		return $query->result();
	}

	function admin_login($postData)
	{
		$this->db->select('*');
		$this->db->where('email', $postData['email']);
		$this->db->where('parola', md5($postData['password']));

		$query = $this->db->get('angajati');

		return $query->result();
	}
}
