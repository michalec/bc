<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_model extends CI_Model {

	function register()
	{
		$data = array(
			'email' => $_POST['email'],
			'password' => sha1($_POST['password']),
                        'role' => 1,
		);
                
		return $this->db->insert('users', $data);
                
                $data = array(
                        'name' => $_POST['name'],
			'surname' => $_POST['surname'],
                );
                
                return $this->db->insert('clients', $data);
	}
	
	
	function check()
	{
		$select = $this->db->where('email', $_POST['email'])
						   ->where('heslo', sha1($_POST['heslo']))
						   ->get('users');
						   
		return $select->num_rows();
	}
	
	
	function getUserData($email)
	{
		$select = $this->db->select('uid, meno, priezvisko, email')
						   ->where('email', $email)
						   ->limit(1)
						   ->get('users');
						   
		if ($select->num_rows() > 0) return $select->row_array();
		else return false;
	}

}