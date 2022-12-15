<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true,],
            'name' => ['type' => 'VARCHAR', 'constraint' => '100',],
            'username' => ['type' => 'VARCHAR', 'constraint' => '100',],
            'password' => ['type' => 'VARCHAR', 'constraint' => '100',],
            'role' => ['type' => 'INT', 'constraint' => '10', 'default' => '1'],
            'created_at' => ['type' => 'TIMESTAMP', 'default' => new RawSql('CURRENT_TIMESTAMP'),],
            'update_at' => ['type' => 'TIMESTAMP', 'default' => new RawSql('CURRENT_TIMESTAMP'),],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('username');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
