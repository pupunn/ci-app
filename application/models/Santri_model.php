<?php 

class Santri_model extends Ci_model {
    public function getAllSantri()
    {
        return $this->db->get('santri')->result_array();
    }

    public function tambahDataSantri()
    {
        $data = [
            "nama" =>$this->input->post('nama', true),
            "noid" =>$this->input->post('noid', true),
            "tpl" =>$this->input->post('tpl', true),
            "ttl" =>$this->input->post('ttl', true),
            "alamat" =>$this->input->post('nama', true)
        ];

        $this->db->insert('santri', $data);
    }

    public function hapusDataSantri($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('santri', ['id'=>$id]);
    }

    public function getSantriById($id)
    {
        return $this->db->get_where('santri', ['id' => $id])->row_array();
    }

    public function ubahDataSantri()
    {
        $data = [
            "nama" =>$this->input->post('nama', true),
            "noid" =>$this->input->post('noid', true),
            "tpl" =>$this->input->post('tpl', true),
            "ttl" =>$this->input->post('ttl', true),
            "alamat" =>$this->input->post('nama', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('santri', $data);
    }

    public function cariDataSantri()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('noid', $keyword);
        $this->db->or_like('tpl', $keyword);
        $this->db->or_like('ttl', $keyword);
        $this->db->or_like('alamat', $keyword);
        return $this->db->get('santri')->result_array();
    }
}