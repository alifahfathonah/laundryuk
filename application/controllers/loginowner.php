<?php
class loginowner extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('Loginowner_model');
        $this->load->library('form_validation');
	}

        public function index()
        {
            
            if($this->session->userdata('logged_in') == TRUE){

                redirect('owner');

            }
            else {
                $this->load->view('login_owner');
            }   
        }

        public function cek_login()
        {
            if($this->session->userdata('logged_in') == FALSE)
            {
                $this->form_validation->set_rules('username','username','trim|required');
                $this->form_validation->set_rules('password','password','trim|required');

                if($this->form_validation->run() == TRUE){
                    if($this->Loginowner_model->cek_user() == TRUE){
                        redirect('owner/index');
                    }
                    else{
                        $this->session->set_flashdata('notif', 'Login Gagal lurd');
                        redirect('loginowner/index');
                    }
                }
                else{
                    $this->session->set_flashdata('notif', validation_errors());
                    redirect('loginowner/index');
                }
            }
            else{
                redirect('Home/index');
            }
        }
        public function register(){
            
            $this->load->view('register_owner');

        }

        public function logout(){
            $this->session->sess_destroy();
            redirect('loginowner');
        }
}