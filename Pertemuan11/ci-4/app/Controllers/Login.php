<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    protected $users;
    public function __construct()
    {
        $this->users = new UserModel;
    }

    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        if (has_cookie('username') && has_cookie('password')) {
            $username = get_cookie('username');
            $password = get_cookie('password');
            if ($username && $password) {
                $this->proses($username, $password);
            }
        }

        return view('auth/login', $data);
    }

    public function proses($username = '', $password = '')
    {
        $remember_me = true;
        if (!$username && !$password) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $remember_me = $this->request->getVar('remember_me');
        }

        $user = $this->users->where('username', $username)->first();
        session()->setFlashdata('msg', 'Username/Password is incorrect.');
        if ($user) {
            if (password_verify($password, $user['password'])) {
                if ($remember_me) {
                    set_cookie('username', $username, 3600 * 24);
                    set_cookie('password', $password, 3600 * 24);
                }

                session()->set('user', $user);

                return redirect()->to('/mahasiswa');
            }
        }
        return redirect()->back();
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
