<?php
class pelanggan extends CI_controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('m_pelanggan');
    }

    public function index(){
            $data['konten']="v_pelanggan";
            $data['data_pelanggan']=$this->m_pelanggan->get_pelanggan();
            $this->load->view('admin_v',$data);
    }

    public function tambah_pelanggan(){
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
                redirect(base_url('index.php/pelanggan'),'refresh');
            } else {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect(base_url('index.php/pelanggan'), 'refresh');
            }
    
    }

    public function detail_pelanggan($id=''){
            $this->load->model('m_pelanggan');
            $data_detail=$this->m_pelanggan->detail_pelanggan($id);
            echo json_encode($data_detail);
    }

    public function ubah_pelanggan(){
            $this->form_validation->set_rules('pelanggan_id', 'pelanggan_id', 'trim|required');
            $this->form_validation->set_rules('nama_pelanggan', 'nama_pelanggan','trim|required');
            $this->form_validation->set_rules('no_telp', 'no_telp','trim|required');
            $this->form_validation->set_rules('password', 'password','trim|required');
            $this->form_validation->set_rules('alt_pelanggan', 'alt_pelanggan','trim|required');

            if ($this->form_validation->run()==FALSE) {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect(base_url('index.php/pelanggan'),'refresh');
            }else{
                $this->load->model('m_pelanggan');
                $prosesupdate=$this->m_pelanggan->ubah_pelanggan();
                if($prosesupdate){
                    $this->session->set_flashdata('pesan', 'sukses update');
                }else{
                    $this->session->set_flashdata('pesan', 'gagal update');
                }
                redirect(base_url('index.php/pelanggan'),'refresh');
            }
    }

    public function hapus_pelanggan($id){
            $this->load->model('m_pelanggan');
            $prosesdelete = $this->m_pelanggan->hapus_pelanggan($id);
            if ($prosesdelete == TRUE) {
                $this->session->flashdata('pesan', 'Sukses Hapus Data');
            }else{
                $this->session->flashdata('pesan', 'Gagal Hapus Data');
            }
            redirect(base_url('index.php/pelanggan'),'refresh');
    }
}