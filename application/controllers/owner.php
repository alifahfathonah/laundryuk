<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class owner extends CI_Controller {
    public function __construct() {
        parent::__construct();
      
}
public function index(){
    $data['konten'] = "dashboardowner";

    $this->load->view('owner_v', $data);
} 
}