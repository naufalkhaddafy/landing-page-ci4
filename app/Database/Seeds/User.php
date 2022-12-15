<?php

namespace App\Database\Seeds;

// use App\Models\User;
use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Fadhil Ngaceng',
            'username' => 'admin',
            'password'    => password_hash('admin', PASSWORD_DEFAULT),
            'role' => 1,
        ];
        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}
