<?php

namespace App\Controllers;

use App\Models\User;
use App\Controllers\BaseController;

class Tes extends BaseController
{
    public function index()
    {
        $username = 'admin';
        $user = new User();
        $data = $user->where('username', $username)->first();
        return $this->response->setJSON($data);
    }
}
