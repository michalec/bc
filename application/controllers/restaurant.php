<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant extends CI_Controller{
    
    function __construct()
	{
		parent::__construct();
		$this->load->model('restaurant_model');
	}
        
    public function index(){
        
        }
    public function register(){
            
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Názov reštaurácie', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email', 'Emailová adresa', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Heslo', 'trim|required|min_length[4]');
            $this->form_validation->set_rules('password2', 'Potvrď heslo', 'trim|required|matches[password]');
            
            $this->form_validation->set_rules('phone', 'Telefónne číslo', 'trim|required|xss_clean');
            $this->form_validation->set_rules('adress', 'Adresa', 'trim|required|xss_clean');
            $this->form_validation->set_rules('postcode', 'PSČ', 'trim|required|xss_clean');
//            $this->form_validation->set_rules('description', 'Popis reštaurácie', 'trim|required|xss_clean');
            
            $this->form_validation->set_error_delimiters('<p class="validation_error">', '</p>');
		
            // ak prejde validaciou a uspesne sa zaregistruje
            if ($this->form_validation->run() && $this->restaurant_model->register())
            {			
                redirect('restaurant_reg_view');
            }
            else
            {
		// chyba
            }	
            //$data['client'] = $this->client_model->getUserData();
            
            $this->template->set('title','Registracia reštaurácie');
            $this->template->view('restaurant_reg_view');
            
    }
}
?>
