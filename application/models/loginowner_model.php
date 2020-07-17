<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginowner_model extends CI_Model {

    public function cek_user(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->db
                          ->where('username',$username)
                          ->where('password',$password)
                          ->get('laundry');

        if($this->db->affected_rows() > 0){

            $data_login = $query->row();

            $data_session = array(
                                'username'=> $data_login->username,
                                'password'=> $data_login->password,
                                'laundry_id'=> $data_login->laundry_id,
                                'logged_in'=> TRUE
            );
            $this->session->set_userdata($data_session);

            return TRUE;
        }else{
            return FALSE;
        }
    }
	
}
