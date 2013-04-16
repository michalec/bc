<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_model extends CI_Model {
	
	function check()
	{
		$select = $this->db->where('email', $_POST['email'])
						   ->where('password', sha1($_POST['password']))
						   ->get('users');
						   
		return $select->num_rows();
	}
	
	
	function get_user_data($email)
	{
		$select = $this->db->select('id, email, role')
						   ->where('email', $email)
						   ->limit(1)
						   ->get('users');
						   
		if ($select->num_rows() > 0) return $select->row_array();
		else return false;
	}

}