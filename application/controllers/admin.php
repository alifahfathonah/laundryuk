<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
      
}
public function index(){
    $data['konten'] = "dashboard";

    $this->load->view('admin_v', $data);
} 
}