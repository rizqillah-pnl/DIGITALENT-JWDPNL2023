<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class Register extends BaseController
{
    protected $users;
    public function __construct()
    {
        $this->users = new UserModel;
    }

    public function index()
    {
        $data = [
            'title' => 'Register',
            'validation' => session()->getFlashdata('errors')
        ];

        return view('auth/register', $data);
    }

    public function store()
    {
        $validate = $this->validate([
            'nama' => 'required',
            'username' => 'required|is_unique[user.username]|min_length[4]|trim|strtolower',
            'password' => 'required|min_length[4]',
            'confirmation_password' => 'required|matches[password]',
        ]);
        if (!$validate) {
            session()->setFlashdata('errors', $this->validator);
            session()->setFlashdata('msg', 'Data Tidak Sesuai!');
            return redirect()->back()->withInput();
        } else {
            $data = [
                'nama' => $this->request->getVar('nama'),
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),
            ];
            session()->set('user', $data);

            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            $this->users->insert($data);
            session()->setFlashdata('pesan', 'Akun Berhasil Dibuat!');
            return redirect()->to('/login');
        }
    }
}
