<?php
class laundry extends CI_controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('m_laundry');
    }

    public function index(){
         
            $data['konten']="v_laundry";
            $this->load->model('m_laundry');
            $data['data_laundry']=$this->m_laundry->get_laundry();
            $this->load->view('admin_v',$data);
    }

    public function tambah_laundry(){        
            $this->form_validation->set_rules('username', 'username','trim|required', array('required' => 'username harus diisi'));
            $this->form_validation->set_rules('password', 'password','trim|required', array('required' => 'password harus diisi'));
            $this->form_validation->set_rules('nama_laundry', 'nama_laundry','trim|required', array('required' => 'nama laundry harus diisi'));
            $this->form_validation->set_rules('kecamatan', 'kecamatan','trim|required', array('required' => 'kecamatan harus diisi'));
            // $this->form_validation->set_rules('username', 'password','trim|required', array('required' => 'username harus diisi'));
            $this->form_validation->set_rules('desc_laundry', 'desc_laundry','trim|required', array('required' => 'deskripsi harus diisi'));
            
            if ($this->form_validation->run() == TRUE ) 
            {
                $this->load->model('m_laundry');
                $prosestambah=$this->m_laundry->tambah_laundry();
                if($prosestambah==true){
                    $this->session->set_flashdata('pesan','sukses masuk');
                } else{
                    $this->session->set_flashdata('pesan', 'gagal masuk');
                }
                redirect(base_url('index.php/laundry'),'refresh');
            } else {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect(base_url('index.php/laundry'), 'refresh');
            }
    }

    public function register_laundry(){        
        $this->form_validation->set_rules('username', 'username','trim|required', array('required' => 'username harus diisi'));
        $this->form_validation->set_rules('password', 'password','trim|required', array('required' => 'password harus diisi'));
        $this->form_validation->set_rules('nama_laundry', 'nama_laundry','trim|required', array('required' => 'nama laundry harus diisi'));
        $this->form_validation->set_rules('kecamatan', 'kecamatan','trim|required', array('required' => 'kecamatan harus diisi'));
        // $this->form_validation->set_rules('username', 'password','trim|required', array('required' => 'username harus diisi'));
        $this->form_validation->set_rules('desc_laundry', 'desc_laundry','trim|required', array('required' => 'deskripsi harus diisi'));
        
        if ($this->form_validation->run() == TRUE ) 
        {
            $this->load->model('m_laundry');
            $prosestambah=$this->m_laundry->tambah_laundry();
            if($prosestambah==true){
                $this->session->set_flashdata('pesan','sukses masuk');
            } else{
                $this->session->set_flashdata('pesan', 'gagal masuk');
            }
            redirect(base_url('index.php/loginowner'),'refresh');
        } else {
            $this->session->set_flashdata('pesan', validation_errors());
            redirect(base_url('index.php/loginowner/register'), 'refresh');
        }
}
    

    public function detail_laundry($id=''){
            $this->load->model('m_laundry');
            $data_detail=$this->m_laundry->detail_laundry($id);
            echo json_encode($data_detail);
    }

    public function ubah_laundry(){
            $this->form_validation->set_rules('laundry_id', 'laundry_id', 'trim|required');
            $this->form_validation->set_rules('username', 'username','trim|required');
            $this->form_validation->set_rules('password', 'password','trim|required');
            $this->form_validation->set_rules('nama_laundry', 'nama_laundry','trim|required');
            $this->form_validation->set_rules('kecamatan', 'kecamatan','trim|required');
            $this->form_validation->set_rules('desc_laundry', 'desc_laundry','trim|required');

            if ($this->form_validation->run()==FALSE) {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect(base_url('index.php/laundry'),'refresh');
            }else{
                $this->load->model('m_laundry');
                $prosesupdate=$this->m_laundry->ubah_laundry();
                if($prosesupdate){
                    $this->session->set_flashdata('pesan', 'sukses update');
                }else{
                    $this->session->set_flashdata('pesan', 'gagal update');
                }
                redirect(base_url('index.php/laundry'),'refresh');
            }
    }

    public function hapus_laundry($id){    
            $this->load->model('m_laundry');
            $prosesdelete = $this->m_laundry->hapus_laundry($id);
            if ($prosesdelete == TRUE) {
                $this->session->flashdata('pesan', 'Sukses Hapus Data');
            }else{
                $this->session->flashdata('pesan', 'Gagal Hapus Data');
            }
            redirect(base_url('index.php/laundry'),'refresh');
    }
}