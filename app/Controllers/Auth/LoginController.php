<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\User;

class LoginController extends BaseController
{
    public function index()
    {
        return view('setup-admin/login/index');
    }

    public function login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = new User();
        $session = session();
        $data = $user->where('username', $username)->first();
        if ($data) {
            if (password_verify($password, $data['password'])) {
                //create session
                $login = [
                    'islogin' => true,
                    'username' => $data['username'],
                    'password' => $data['password'],
                    'name' => $data['name'],
                    'role' => $data['role'],
                ];
                $session->set($login);
                return redirect()->to(base_url('dashboard'));
            } else {
                $session->setFlashdata('msg', 'Email/Password invalid');
                return redirect()->to(base_url('login'));
            }
        } else {
            $session->setFlashdata('msg', 'Email/Password invalid');
            return redirect()->to(base_url('login'));
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('login'));
    }
}
