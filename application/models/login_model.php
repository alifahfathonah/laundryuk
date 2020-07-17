<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function cek_user(){
        $no_telp = $this->input->post('no_telp');
        $password = $this->input->post('password');

        $query = $this->db
                          ->where('no_telp',$no_telp)
                          ->where('password',$password)
                          ->get('pelanggan');

        if($this->db->affected_rows() > 0){

            $data_login = $query->row();

            $data_session = array(
                                'no_telp'=> $data_login->no_telp,
                                'password'=> $data_login->password,
                                'nama_pelanggan'=> $data_login->nama_pelanggan,
                                'pelanggan_id'=> $data_login->pelanggan_id,
                                'logged_in'=> TRUE
            );
            $this->session->set_userdata($data_session);

            return TRUE;
        }else{
            return FALSE;
        }
    }

	
}
