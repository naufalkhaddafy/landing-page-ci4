<?php

namespace App\Controllers\Admin;

use App\Models\User;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $user = new User();
        $data['users'] = $user->findAll();
        return view('setup-admin/user/index', $data);
    }
    public function readCreate()
    {
        return view('setup-admin/user/create');
    }
    public function readUpdate($id)
    {
        $user = new User();
        $data['data'] = $user->where('id', $id)->first();
        return view('setup-admin/user/update', $data);
    }
    public function create()
    {
        $firstName = $this->request->getVar('name');
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = new User();
        $user->insert([
            'name' => $firstName,
            // 'lastname' => $lastName,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ]);
        return redirect()->to(base_url('user'));
    }
    public function update($id)
    {
        $user = new User();
        $firstName = $this->request->getVar('name');
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user->update(
            $id,
            [
                'name' => $firstName,
                // 'lastname' => $lastName,
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT),
            ]
        );
        return redirect()->to(base_url('user'));
    }

    public function delete($id)
    {
        $users = new User();
        $users->delete($id);
        return redirect()->to(base_url('user'));
    }
}
