<?php
class m_laundry extends CI_model{
    
    public function get_laundry(){
        return $this->db->get('laundry')
                        ->result();
    }

    public function tambah_laundry(){
        $tambah_laundry=array(
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password'),
            'nama_laundry'=>$this->input->post('nama_laundry'),
            'kecamatan'=>$this->input->post('kecamatan'),
            'foto'=>$this->uploadfoto(),
            'desc_laundry'=>$this->input->post('desc_laundry'),
		);
		return $this->db->insert('laundry', $tambah_laundry);
    }

    public function uploadfoto(){
        $config['upload_path']      = './assets/laundry/';
		$config['allowed_types']    = 'gif|jpg|png|jpeg';
		$config['max_size']         = '10240';
        $config['overwrite']        = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        else{
            print_r($this->upload->display_errors());
        }
    }

    public function detail_laundry($id){
        return $this->db->where('laundry_id', $id)
                        ->get('laundry')
                        ->row();
    }
    
    public function ubah_laundry(){
		$ubah_laundry=array(
            'laundry_id'=>$this->input->post('laundry_id'),
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password'),
            'nama_laundry'=>$this->input->post('nama_laundry'),
            'kecamatan'=>$this->input->post('kecamatan'),
            'desc_laundry'=>$this->input->post('desc_laundry')
    );
    return $this->db->where('laundry_id', $this->input->post('laundry_id'))
                    ->update('laundry',$ubah_laundry);
    }

    public function hapus_laundry($id)
	{
        $delete = $this->db->where('laundry_id',$id)
                           ->delete('laundry');
		if($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    public function l_kedungkandang(){
        $where = "kecamatan='kedungkandang'";
        return $this->db->where($where)
                        ->get('laundry')
                        ->result();
    }
    public function l_klojen(){
        $where = "kecamatan='klojen'";
        return $this->db->where($where)
                        ->get('laundry')
                        ->result();
    }
    public function l_Blimbing(){
        $where = "kecamatan='blimbing'";
        return $this->db->where($where)
                        ->get('laundry')
                        ->result();
    }
    public function l_Lowokwaru(){
        $where = "kecamatan='lowokwaru'";
        return $this->db->where($where)
                        ->get('laundry')
                        ->result();
    }
    public function l_Sukun(){
        $where = "kecamatan='sukun'";
        return $this->db->where($where)
                        ->get('laundry')
                        ->result();
    }
}