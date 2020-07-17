<?php
class order extends CI_controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('m_order');
    }
    public function index(){
            $data['konten']="v_order";
            $this->load->model('m_order');
            $data['data_order']=$this->m_order->get_order();
            $this->load->view('owner_v',$data);
    }

    public function tambah_order(){        
            $this->form_validation->set_rules('pelanggan_id', 'pelanggan_id','trim|required');
            $this->form_validation->set_rules('alt_pelanggan', 'alt_pelanggan','trim|required');
            $this->form_validation->set_rules('tgl_order', 'tgl_order','trim|required');
            $this->form_validation->set_rules('tgl_selesai', 'tgl_selesai','trim|required');
            $this->form_validation->set_rules('laundry_id', 'laundry_id','trim|required');
            $this->form_validation->set_rules('status', 'status','trim|required');
            $this->form_validation->set_rules('note', 'note','trim|required');
            
            if ($this->form_validation->run() == TRUE ) 
            {
                $this->load->model('m_order');
                $prosestambah=$this->m_order->tambah_order();
                if($prosestambah==true){
                    $this->session->set_flashdata('pesan','sukses masuk');
                } else{
                    $this->session->set_flashdata('pesan', 'gagal masuk');
                }
                redirect(base_url('index.php/pawon'),'refresh');
            } else {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect(base_url('index.php/admin'), 'refresh');
            }
    }

    public function detail_order($id=''){
            $this->load->model('m_order');
            $data_detail=$this->m_order->detail_order($id);
            echo json_encode($data_detail);
    }

    public function ubah_order(){
            $this->form_validation->set_rules('id', 'id','trim|required');
            $this->form_validation->set_rules('alt_pelanggan', 'alt_pelanggan','trim|required');
            $this->form_validation->set_rules('laundry_id', 'laundry_id','trim|required');
            $this->form_validation->set_rules('note', 'note','trim|required');
            $this->form_validation->set_rules('pelanggan_id', 'pelanggan_id','trim|required');
            $this->form_validation->set_rules('status', 'status','trim|required');
            $this->form_validation->set_rules('tgl_order', 'tgl_order','trim|required');
            $this->form_validation->set_rules('tgl_selesai', 'tgl_selesai','trim|required');

            if ($this->form_validation->run()==FALSE) {
                $this->session->set_flashdata('pesan', validation_errors());
                redirect(base_url('index.php/order'),'refresh');
            }else{
                $this->load->model('m_order');
                $prosesupdate=$this->m_order->ubah_order();
                if($prosesupdate){
                    $this->session->set_flashdata('pesan', 'sukses update');
                }else{
                    $this->session->set_flashdata('pesan', 'gagal update');
                }
                redirect(base_url('index.php/order'),'refresh');
            }
    }
    public function hapus_order($id){
        $this->load->model('m_pelanggan');
        $prosesdelete = $this->m_order->hapus_order($id);
        if ($prosesdelete == TRUE) {
            $this->session->flashdata('pesan', 'Sukses Hapus Data');
        }else{
            $this->session->flashdata('pesan', 'Gagal Hapus Data');
        }
        redirect(base_url('index.php/order'),'refresh');
}
}