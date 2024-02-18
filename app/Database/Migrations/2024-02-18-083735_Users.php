<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'f_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'f_nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'f_email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'f_password' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'f_tanggallahir' => [
                'type' => 'DATE',
            ],
            'f_role' => [
                'type' => 'ENUM',
                'constraint' => ['1','2','3'],
            ],
        ]);
        $this->forge->addKey('f_id', true);
        $this->forge->createTable('t_users');
    }

    public function down()
    {
        $this->forge->dropTable('t_users');
    }
}
