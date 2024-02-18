<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
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
            'f_nama_buku' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'f_pengarang' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'f_penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'f_deskripsi' => [
                'type' => 'VARCHAR',
                'constraint' => '1000',
            ],
            'f_jumlah' => [
                'type' => 'INT',
                'constraint' => '10',
            ],
        ]);
        $this->forge->addKey('f_id', true);
        $this->forge->createTable('t_buku');
    }

    public function down()
    {
        $this->forge->dropTable('t_buku');
    }
}

