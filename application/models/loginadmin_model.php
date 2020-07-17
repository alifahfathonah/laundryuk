<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginadmin_model extends CI_Model {

    public function cek_user(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->db
                          ->where('username',$username)
                          ->where('password',$password)
                          ->get('admin');

        if($this->db->affected_rows() > 0){

            $data_login = $query->row();

            $data_session = array(
                                'username'=> $data_login->username,
                                'password'=> $data_login->password,
                                'id'=> $data_login->id,
                                'logged'=> TRUE
            );
            $this->session->set_userdata($data_session);

            return TRUE;
        }else{
            return FALSE;
        }
    }
	
}
