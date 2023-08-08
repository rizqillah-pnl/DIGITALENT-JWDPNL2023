<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $user = session()->get('user');
        if ($user) {
            return redirect()->to('/mahasiswa');
        }
        return view('page/index', ['title' => 'Landing Page']);
    }
}
