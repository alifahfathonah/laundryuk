<?php
class m_order extends CI_model{
    
    public function get_order(){
        // return $this->db->get('pesan')
        //                 ->result();
        $id=$this->session->userdata('laundry_id');
        $this->db->select('t1.id, t2.nama_pelanggan, t1.alt_pelanggan, t1.tgl_order, t1.tgl_selesai, t1.status, t1.note')
                 ->from('pesan as t1')
                 ->where('t3.laundry_id', $id)
                 ->join('pelanggan as t2', 't1.pelanggan_id = t2.pelanggan_id')
                 ->join('laundry as t3', 't1.laundry_id = t3.laundry_id');
                //  ->get();
        $query = $this->db->get();
        if($query->num_rows() != 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }

        // $id=$this->session->userdata('id');
        // $this->db->select('res.*, v.*, t.*');
        // $this->db->from('reservation AS res, voyage AS v, trajet AS t,user AS u,vehicule AS veh ');
        // $this->db->where('res.id_passager',$id);
        // $this->db->where('u.id',$id);
        // $this->db->where('res.idvoyage=v.id');
        // $this->db->where('t.id=v.id_trajet');
        // $this->db->where('veh.id_utilisateur',$id);
    }

    public function orderpelanggan(){
        $id=$this->session->userdata('pelanggan_id');
        $this->db->select('t1.id, t2.nama_laundry, t1.alt_pelanggan, t1.tgl_order, t1.tgl_selesai, t1.status, t1.note')
                 ->from('pesan as t1')
                 ->where('t3.pelanggan_id', $id)
                 ->join('laundry as t2', 't1.laundry_id = t2.laundry_id')
                 ->join('pelanggan as t3', 't1.pelanggan_id = t3.pelanggan_id');
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

    public function tambah_order(){
        $tambah_order=array(
            'pelanggan_id'=>$this->input->post('pelanggan_id'),
            'alt_pelanggan'=>$this->input->post('alt_pelanggan'),
            'tgl_order'=>$this->input->post('tgl_order'),
            'tgl_selesai'=>$this->input->post('tgl_selesai'),
            'laundry_id'=>$this->input->post('laundry_id'),
            'status'=>$this->input->post('status'),
            'note'=>$this->input->post('note')
		);
		return $this->db->insert('pesan', $tambah_order);
    }

    public function detail_order($id){
        return $this->db->where('id', $id)
                        ->get('pesan')
                        ->row();
    }
    
    public function ubah_order(){
            $ubah_order=array(
                'id'=>$this->input->post('id'),
                'alt_pelanggan'=>$this->input->post('alt_pelanggan'),
                'laundry_id'=>$this->input->post('laundry_id'),
                'note'=>$this->input->post('note'),
                'pelanggan_id'=>$this->input->post('pelanggan_id'),
                'status'=>$this->input->post('status'),
                'tgl_order'=>$this->input->post('tgl_order'),
                'tgl_selesai'=>$this->input->post('tgl_selesai')
        );
        return $this->db->where('id', $this->input->post('id'))
                        ->update('pesan',$ubah_order);
    }
    public function hapus_order($id)
	{
        $delete = $this->db->where('id',$id)
                           ->delete('pesan');
		if($this->db->affected_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
	}
}