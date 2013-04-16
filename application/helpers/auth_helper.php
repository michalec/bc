<?php 

/*
 * vrati user_id
 */
function uid()
{
	$ci =& get_instance();
	$ci->load->library('tank_auth');
	
	return logged_in() ? $ci->tank_auth->get_user_id() : FALSE;
}


/*
 * vrati ci je user prihlaseny
 */
function logged_in()
{
	$ci =& get_instance();
	$ci->load->library('tank_auth');
	
	return $ci->tank_auth->is_logged_in();
}


/*
 * vrati ci je user administrator
 */
function is_admin()
{
	$ci =& get_instance();
	
	if (!$uid = uid()) return FALSE;
	
	if ((int)$uid === 1) return TRUE; // TURBO MEGA ADMIN
	
	$query = $ci->db->select('roles')
					->where('user_id', $uid)
					->get('user_profiles');

	return ($query->row()->roles === 'admin') ? TRUE : FALSE;	
}