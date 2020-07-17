<?php
class laporan extends CI_controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('m_lapor');
    }

    public function index(){
         
            $data['konten']="v_lapor";
            $this->load->model('m_lapor');
            $data['data_lapor']=$this->m_lapor->get_lapor();
            $this->load->view('owner_v',$data);
    }

    public function tambah_laporan(){        
            $this->form_validation->set_rules('pelanggan_id', 'pelanggan_id','trim|required', array('required' => 'data harus diisi'));
            $this->form_validation->set_rules('laundry_id', 'laundry_id','trim|required', array('required' => 'data harus diisi'));
            $this->form_validation->set_rules('id', 'id','trim|required', array('required' => 'data harus diisi'));
            $this->form_validation->set_rules('laporan', 'lapoarn','trim|required', array('required' => 'data harus diisi'));
            
            if ($this->form_validation->run() == TRUE ) 
            {
                $prosestambah=$this->m_lapor->tambah_laporan();
                if($prosestambah==true){
                    $this->session->set_flashdata('pesan','sukses masuk');
                } else{
                    $this->session->set_flashdata('pesan', 'gagal masuk');
                }
                redirect(base_url('index.php/pawon'),'refresh');
            } else {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect(base_url('index.php/pawon'), 'refresh');
            }
    }
    
}