<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//
//class Auth extends CI_Controller{
//    
//    function __construct()
//    {
//            parent::__construct();
//            //$this->load->helper(array('form', 'url'));
//            //$this->load->library('form_validation');
//            //$this->load->library('tank_auth');
//            //$this->lang->load('tank_auth');
//            $this->load->model('auth_model');
//        
//            
//        }
//        
//    public function index(){
//        echo 'buuuuuuuuuu';
//        }
//        
//    public function login()
//	{
//        echo 'buuuuuuuuuu';
//		$this->load->library('form_validation');
//		$this->form_validation->set_rules('email', 'Emailová adresa', 'trim|required');
//		$this->form_validation->set_rules('heslo', 'Heslo', 'trim|required');
//		
//		// ak prejde validaciou
//		if ($this->form_validation->run())
//		{			
//			if ($this->auth_model->check())
//			{
//				// vytvorime session
//				$data = $this->auth_model->getUserData($_POST['email']);
//				$data['logged_in'] = true;
//				
//				$this->session->set_userdata($data);
//				
//				echo 'nie si zaregistrovaný, čo robíš..';
//			}
//			else
//			{
//				echo 'nie si zaregistrovaný, čo robíš..';
//			}
//		}
//		else
//		{
//			// chyba
//		}		
//            $this->template->set('title','Registracia klienta');
//            $this->template->view('login_view');	
//	}
//        
//    function logout()
//	{
//		$this->session->unset_userdata(array('name'=>'', 'surname'=>'', 'email'=>'', 'logged_in'=>'', 'uid'=>''));
//		$this->login();
//	}
//        
//        public function kokot(){
//        echo 'buuuuuuuuuu';
//        }
//
//}
//
//
//

class Auth extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
	}
        
    public function index(){
//            $data['client'] = $this->client_model->get_users();
//            
//            $this->template->set('title','Registrácia klienta');
//            $this->template->view('client_reg_view',$data);
        }

     public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Emailová adresa', 'trim|required');
		$this->form_validation->set_rules('password', 'Heslo', 'trim|required');
		
		// ak prejde validaciou
		if ($this->form_validation->run())
		{			
			if ($this->auth_model->check())
			{
				// vytvorime session
				$data = $this->auth_model->get_user_data($_POST['email']);
				$data['logged_in'] = true;
				
				$this->session->set_userdata($data);
				
				//echo $this->session->userdata;
                                
                                print_r($data);

                                if($data->role == 0){
                                    echo 'admin';
                                }
                                elseif ($data->role == 1){
                                    echo 'user';
                                }
                                elseif ($data->role == 2){
                                    echo 'rest';
                                }
			}
			else
			{
				echo 'nie si zaregistrovaný, čo robíš..';
			}
		}
		else
		{
			//echo 'baaad';
		}		
            $this->template->set('title','Registracia klienta');
            $this->template->view('login_view');	
	}
    function logout()
	{
		$this->session->unset_userdata(array('meno'=>'', 'priezvisko'=>'', 'email'=>'', 'logged_in'=>'', 'id'=>''));
		$this->login();
	}
}

?>