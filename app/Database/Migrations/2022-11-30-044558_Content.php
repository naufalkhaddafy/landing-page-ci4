<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class Content extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true,],
            'user_id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true,],
            'title' => ['type' => 'VARCHAR', 'constraint' => '100',],
            'content' => ['type' => 'VARCHAR', 'constraint' => '100',],
            'category' => ['type' => 'VARCHAR', 'constraint' => '100',],
            'status' => ['type' => 'TEXT', 'null' => true,],
            'created_at' => ['type' => 'TIMESTAMP', 'default' => new RawSql('CURRENT_TIMESTAMP'),],
            'update_at' => ['type' => 'TIMESTAMP', 'default' => new RawSql('CURRENT_TIMESTAMP'),],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('content');
    }

    public function down()
    {
        $this->forge->dropTable('content');
    }
}
