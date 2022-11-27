<?php

class Customer_model extends CI_Model {
    public function tambahData() {
        $data = [
            'nama_perusahaan' => htmlspecialchars($this->input->post('nama_perusahaan', true)),
            'alamat_perusahaan' => htmlspecialchars($this->input->post('alamat_perusahaan', true)),
            'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
            'no_fax' => htmlspecialchars($this->input->post('no_fax', true)),
            'sektor_usaha' => htmlspecialchars($this->input->post('sektor_usaha', true)),
            'negara' => htmlspecialchars($this->input->post('negara', true)),
            'lokasi' => htmlspecialchars($this->input->post('lokasi', true))
        ];
        $this->db->insert('customers', $data);
    }

    public function editData()
    {
        $data = [
            'nama_perusahaan' => htmlspecialchars($this->input->post('nama_perusahaan', true)),
            'alamat_perusahaan' => htmlspecialchars($this->input->post('alamat_perusahaan', true)),
            'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
            'no_fax' => htmlspecialchars($this->input->post('no_fax', true)),
            'sektor_usaha' => htmlspecialchars($this->input->post('sektor_usaha', true)),
            'negara' => htmlspecialchars($this->input->post('negara', true)),
            'lokasi' => htmlspecialchars($this->input->post('lokasi', true))
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('customers', $data);
    }

    public function getAllCustomer() {
        return $this->db->get('customers')->result_array();
    }

    public function hapusCustomer($id)
    {
        return $this->db->delete('customers', ['id' => $id]);
    }
}