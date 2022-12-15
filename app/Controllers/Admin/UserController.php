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
    public function create()
    {
        $firstName = $this->request->getVar('firstName');
        $lastName = $this->request->getVar('lastName');
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


        // $user->save($data);
        // try {

        // } catch (\Throwable $e) {
        //     return $this->response->setJSON($e);
        // }
    }
}
