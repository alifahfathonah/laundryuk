<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pawon extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_laundry');
        $this->load->model('m_order');      
}
public function index(){
    $data['konten'] = "v_home";
    $data['data_order']=$this->m_order->orderpelanggan();
    $this->load->view('templat', $data);
}

public function detail_order($id=''){
    $this->load->model('m_order');
    $data_detail=$this->m_order->detail_order($id);
    echo json_encode($data_detail);
}

public function kedungkandang(){
    $data['konten'] = "v_kedungkandang";
    $data['data_order']=$this->m_order->orderpelanggan();
    $data['data_laundry']=$this->m_laundry->l_kedungkandang();
    $this->load->view('templat', $data);
}

public function klojen(){
    $data['konten'] = "v_klojen";
    $data['data_order']=$this->m_order->orderpelanggan();
    $data['data_laundry']=$this->m_laundry->l_klojen();
    $this->load->view('templat', $data);
    
} 

public function blimbing(){
    $data['konten'] = "v_blimbing";
    $data['data_order']=$this->m_order->orderpelanggan();
    $data['data_laundry']=$this->m_laundry->l_blimbing();
    $this->load->view('templat', $data);
} 

public function lowokwaru(){
    $data['konten'] = "v_lowokwaru";
    $data['data_order']=$this->m_order->orderpelanggan();
    $data['data_laundry']=$this->m_laundry->l_lowokwaru();
    $this->load->view('templat', $data);
}

public function sukun(){
    $data['konten'] = "v_sukun";
    $data['data_order']=$this->m_order->orderpelanggan();
    $data['data_laundry']=$this->m_laundry->l_sukun();
    $this->load->view('templat', $data);
} 
}