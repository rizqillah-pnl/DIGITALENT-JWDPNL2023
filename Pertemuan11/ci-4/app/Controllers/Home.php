<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use CodeIgniter\HTTP\Request;

class Home extends BaseController
{
    protected $db;
    public function __construct()
    {
        $this->db = new MahasiswaModel;
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['mahasiswa'] = $this->db->findAll();
        return view('page/dashboard', $data);
    }

    public function editxml()
    {
        $value = $this->request->getPost('value');
        $id = $this->request->getPost('id');
        $kolom = $this->request->getPost('kolom');

        if ($kolom == 1) {
            $sql = $this->db->update($id, ['nim' => $value]);
        } elseif ($kolom == 2) {
            $sql = $this->db->update($id, ['nama' => $value]);
        } elseif ($kolom == 3) {
            $sql = $this->db->update($id, ['prodi' => $value]);
        }

        if ($sql) {
            return json_encode(['status' => 200]);
        } else {
            return json_encode(['status' => 500]);
        }
    }
}
