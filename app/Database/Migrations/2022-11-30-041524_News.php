<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\RawSql;
use CodeIgniter\Database\Migration;

class News extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true,],
            'user_id' => ['type' => 'INT', 'constraint' => 5, 'unsigned' => true,],
            'title' => ['type' => 'VARCHAR', 'constraint' => '100',],
            'content' => ['type' => 'VARCHAR', 'constraint' => '100',],
            'category' => ['type' => 'VARCHAR', 'constraint' => '100',],
            'status' => ['type' => 'ENUM', 'constraint' => ['publish', 'archived'], 'default' => 'archived',],
            'created_at' => ['type' => 'TIMESTAMP', 'default' => new RawSql('CURRENT_TIMESTAMP'),],
            'update_at' => ['type' => 'TIMESTAMP', 'default' => new RawSql('CURRENT_TIMESTAMP'),],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('news');
    }

    public function down()
    {
        $this->forge->dropTable('news');
    }
}
