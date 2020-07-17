<?php
class masukadmin extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('masuk_model');
        $this->load->library('form_validation');
	}

        public function index()
        {
            
            if($this->session->userdata('logged_in') == TRUE){

                redirect('admin/index');

            }
            else {
                $this->load->view('masuk_view');
            }   
        }

        public function cek_login()
        {
            if($this->session->userdata('logged_in') == FALSE)
            {
                $this->form_validation->set_rules('username','username','trim|required');
                $this->form_validation->set_rules('password','password','trim|required');

                if($this->form_validation->run() == TRUE){
                    if($this->masuk_model->cek_user() == TRUE){
                        redirect('admin/index');
                    }
                    else{
                        $this->session->set_flashdata('notif', 'Login Gagal lurd');
                        redirect('masukadmin/index');
                    }
                }
                else{
                    $this->session->set_flashdata('notif', validation_errors());
                    redirect('masukadmin/index');
                }
            }
            else{
                redirect('masuk_view/index');
            }
        }
        public function logout(){
            $this->session->sess_destroy();
            redirect('masuk_view/index');
        }
}