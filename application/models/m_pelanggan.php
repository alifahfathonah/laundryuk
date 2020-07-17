<?php
class m_pelanggan extends CI_model{
    
    public function get_pelanggan(){
        return $this->db->get('pelanggan')
                        ->result();
    }

    public function tambah_pelanggan(){
        $tambah_pelanggan=array(
            'nama_pelanggan'=>$this->input->post('nama_pelanggan'),
            'no_telp'=>$this->input->post('no_telp'),
            'password'=>$this->input->post('password'),
            'alt_pelanggan'=>$this->input->post('alt_pelanggan')
		);
		return $this->db->insert('pelanggan', $tambah_pelanggan);
    }

    public function detail_pelanggan($id){
        return $this->db->where('pelanggan_id', $id)
                        ->get('pelanggan')
                        ->row();
    }
    
    public function ubah_pelanggan(){
		$ubah_pelanggan=array(
            'pelanggan_id'=>$this->input->post('pelanggan_id'),
            'nama_pelanggan'=>$this->input->post('nama_pelanggan'),
            'no_telp'=>$this->input->post('no_telp'),
            'password'=>$this->input->post('password'),
            'alt_pelanggan'=>$this->input->post('alt_pelanggan')
    );
    return $this->db->where('pelanggan_id', $this->input->post('pelanggan_id'))
                    ->update('pelanggan',$ubah_pelanggan);
    }

    public function hapus_pelanggan($id)
	{
        $delete = $this->db->where('pelanggan_id',$id)
                           ->delete('pelanggan');
		if($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
	}

}