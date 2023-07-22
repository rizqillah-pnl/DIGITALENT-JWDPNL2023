<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use CodeIgniter\HTTP\Request;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;
    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel;
    }
    public function index()
    {
        $currentPage = $this->request->getVar('page_mahasiswa') ? $this->request->getVar('page_mahasiswa') : 1;

        $data = [
            'title' => 'Dashboard',
            'mahasiswa' => $this->mahasiswaModel->orderBy('created_at', 'desc')->paginate(10, 'mahasiswa'),
            'pager' => $this->mahasiswaModel->pager,
            'currentPage' => $currentPage,
            'count' => $this->mahasiswaModel->countAllResults()
        ];

        return view('page/dashboard', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data',
            'validation' => session()->getFlashdata('errors')
        ];
        return view('page/add_mahasiswa', $data);
    }

    public function store()
    {
        $validated = $this->validate([
            'nim' => "required|integer|is_unique[mahasiswa.nim]|max_length[14]",
            'nama'  => 'required',
            'prodi'  => 'required',
        ]);
        if (!$validated) {
            session()->setFlashdata('errors', $this->validator);
            return redirect()->back()->withInput();
        } else {
            $data = [
                'nim' => $this->request->getVar('nim'),
                'nama' => $this->request->getVar('nama'),
                'prodi' => $this->request->getVar('prodi')
            ];
            $this->mahasiswaModel->insert($data);
            session()->setFlashdata('success', 'Data Berhasil Disimpan!');
            return redirect()->to('/mahasiswa');
        }
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data',
            'data' => $this->mahasiswaModel->find($id),
            'id' => $id,
            'validation' => session()->getFlashdata('errors')
        ];
        return view('page/edit_mahasiswa', $data);
    }

    public function update($id)
    {
        $unique = ($this->request->getVar('old_nim') != $this->request->getVar('nim')) ? "|is_unique[mahasiswa.nim]" : '';
        $validated = $this->validate([
            'nim' => "required|integer|max_length[14]" . $unique,
            'nama'  => 'required',
            'prodi'  => 'required',
        ]);
        if (!$validated) {
            session()->setFlashdata('errors', $this->validator);
            return redirect()->back()->withInput();
        } else {
            $data = [
                'nim' => $this->request->getVar('nim'),
                'nama' => $this->request->getVar('nama'),
                'prodi' => $this->request->getVar('prodi')
            ];
            $this->mahasiswaModel->update($id, $data);
            session()->setFlashdata('success', 'Data Berhasil Diubah!');
            return redirect()->to('/mahasiswa');
        }
    }

    public function hapus($id)
    {
        $this->mahasiswaModel->delete($id);
        session()->setFlashdata('success', 'Data Berhasil Dihapus!');
        return redirect()->back();
    }

    public function search()
    {
        $value = $this->request->getVar('search');
        $currentPage = $this->request->getVar('page_mahasiswa') ? $this->request->getVar('page_mahasiswa') : 1;
        $data = [
            'data' => $this->mahasiswaModel->like('nim', $value)->orLike('nama', $value)->orLike('prodi', $value)->orderBy('created_at', 'desc')->paginate(10, 'mahasiswa'),
            'pager' => $this->mahasiswaModel->pager,
            'currentPage' => $currentPage,
            'count' => $this->mahasiswaModel->countAllResults()
        ];


        return view('components/search', $data);
    }

    public function editxml()
    {
        $value = $this->request->getPost('value');
        $id = $this->request->getPost('id');
        $kolom = $this->request->getPost('kolom');

        if ($kolom == 1) {
            $sql = $this->mahasiswaModel->update($id, ['nim' => $value]);
        } elseif ($kolom == 2) {
            $sql = $this->mahasiswaModel->update($id, ['nama' => $value]);
        } elseif ($kolom == 3) {
            $sql = $this->mahasiswaModel->update($id, ['prodi' => $value]);
        }

        if ($sql) {
            return json_encode(['status' => 200]);
        } else {
            return json_encode(['status' => 500]);
        }
    }
}
