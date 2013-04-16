<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('client_model');
	}
        
    public function index(){
//            $data['client'] = $this->client_model->get_users();
//            
//            $this->template->set('title','Registrácia klienta');
//            $this->template->view('client_reg_view',$data);
        }
    public function register(){
            
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Meno', 'trim|required|xss_clean');
            $this->form_validation->set_rules('surname', 'Priezvisko', 'trim|required|xss_clean');
            $this->form_validation->set_rules('email', 'Emailová adresa', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Heslo', 'trim|required|min_length[4]');
            $this->form_validation->set_rules('password2', 'Potvrď heslo', 'trim|required|matches[password]');
            $this->form_validation->set_error_delimiters('<p class="validation_error">', '</p>');
		
            // ak prejde validaciou a uspesne sa zaregistruje
            if ($this->form_validation->run() && $this->client_model->register())
            {			
                redirect('');
            }
            else
            {
		// chyba
            }	
            //$data['client'] = $this->client_model->getUserData();
            
            $this->template->set('title','Registracia klienta');
            $this->template->view('client_reg_view');
            
    }
    
}
?>
