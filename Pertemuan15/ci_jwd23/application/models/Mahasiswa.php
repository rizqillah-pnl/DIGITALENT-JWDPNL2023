<?php
class Mahasiswa extends CI_Model
{
    public function tampil($perpage, $awalpage)
    {
        return $this->db->get('mahasiswa', $perpage, $awalpage)->result_array();
    }
    public function simpan()
    {
        $data = [
            'nim' => $this->input->post('tnim', true),
            'nama' => $this->input->post('tnama', true),
            'prodi' => $this->input->post('tprodi', true)
        ];
        $this->db->insert('mahasiswa', $data);
    }
}
