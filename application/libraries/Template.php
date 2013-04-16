<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Template {

	var $template_data = array();
	
	
	function set($name, $value)
	{
		$this->template_data[$name] = $value;
	}
	
	
	function load($template = '', $view = '', $view_data = array())
	{
		$ci =& get_instance();
		
		$this->set('content', $ci->load->view($view, $view_data, TRUE));
		
		return $ci->load->view($template, $this->template_data);
	}	
	
	
	function view($view = '', $view_data = array())
	{
		$ci =& get_instance();
		
		$this->set('content', $ci->load->view($view, $view_data, TRUE));
		
		return $ci->load->view('template', $this->template_data);
	}

}