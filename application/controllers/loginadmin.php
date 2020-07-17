<?php
class loginadmin extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('loginadmin_model');
        $this->load->library('form_validation');
	}

        public function index()
        {
            
            if($this->session->userdata('logged') == TRUE){

                redirect('admin');

            }
            else {
                $this->load->view('loginadmin_v');
            }   
        }

        public function cek_login()
        {
            if($this->session->userdata('logged') == FALSE)
            {
                $this->form_validation->set_rules('username','username','trim|required');
                $this->form_validation->set_rules('password','password','trim|required');

                if($this->form_validation->run() == TRUE){
                    if($this->loginadmin_model->cek_user() == TRUE){
                        redirect('loginadmin/index');
                    }
                    else{
                        $this->session->set_flashdata('notif', 'Login Gagal lurd');
                        redirect('loginadmin/index');
                    }
                }
                else{
                    $this->session->set_flashdata('notif', validation_errors());
                    redirect('loginadmin/index');
                }
            }
            else{
                redirect('admin/index');
            }
        }

        public function logout(){
            $this->session->sess_destroy();
            redirect('loginadmin');
        }
}