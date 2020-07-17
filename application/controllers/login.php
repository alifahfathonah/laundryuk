<?php
class Login extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('form_validation');
	}

        public function index()
        {
            
            if($this->session->userdata('logged_in') == TRUE){

                redirect('pawon/index');

            }
            else {
                $this->load->view('login_view');
            }   
        }

        public function cek_login()
        {
            if($this->session->userdata('logged_in') == FALSE)
            {
                $this->form_validation->set_rules('no_telp','no_telp','trim|required');
                $this->form_validation->set_rules('password','password','trim|required');

                if($this->form_validation->run() == TRUE){
                    if($this->Login_model->cek_user() == TRUE){
                        redirect('Pawon/index');
                    }
                    else{
                        $this->session->set_flashdata('notif', 'Login Gagal lurd');
                        redirect('login/index');
                    }
                }
                else{
                    $this->session->set_flashdata('notif', validation_errors());
                    redirect('login/index');
                }
            }
            else{
                redirect('Home/index');
            }
        }
public function register(){
    
    $this->form_validation->set_rules('nama_pelanggan', 'nama_pelanggan','trim|required', array('required' => 'nama pelanggan harus diisi'));
    $this->form_validation->set_rules('no_telp', 'no_telp','trim|required', array('required' => 'No Telp pelanggan harus diisi'));
    $this->form_validation->set_rules('password', 'password','trim|required', array('required' => 'Password pelanggan harus diisi'));
    $this->form_validation->set_rules('alt_pelanggan', 'alt_pelanggan','trim|required', array('required' => 'alamat pelanggan harus diisi'));
    
    if ($this->form_validation->run() == TRUE ) 
    {
        $this->load->model('m_pelanggan');
        $prosestambah=$this->m_pelanggan->tambah_pelanggan();
        if($prosestambah==true){
            $this->session->set_flashdata('pesan','sukses masuk');
        } else{
            $this->session->set_flashdata('pesan', 'gagal masuk');
        }
        redirect('login');
    } else {
        $this->session->set_flashdata('pesan', validation_errors());
        ('login/register');
    }
    
    $this->load->view('register_user');

}
        public function logout(){
            $this->session->sess_destroy();
            redirect('Home/index');
        }
}