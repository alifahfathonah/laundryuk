<?php
class m_lapor extends CI_model{

    public function get_lapor(){
        $id=$this->session->userdata('laundry_id');
        $this->db->select('t1.lapor_id, t2.nama_pelanggan, t1.id, t1.laporan')
                 ->from('lapor as t1')
                 ->where('t1.laundry_id', $id)
                 ->join('pelanggan as t2', 't1.pelanggan_id = t2.pelanggan_id');
        $query = $this->db->get();
        if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    
    public function tambah_laporan(){
        $tambah_laporan=array(
            'pelanggan_id'=>$this->input->post('pelanggan_id'),
            'laundry_id'=>$this->input->post('laundry_id'),
            'id'=>$this->input->post('id'),
            'laporan'=>$this->input->post('laporan')
		);
		return $this->db->insert('lapor', $tambah_laporan);
    }

}