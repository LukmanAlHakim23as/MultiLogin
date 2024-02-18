<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Peminjaman extends Migration
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
            'f_id_buku' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'f_id_users' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'f_tanggal_pinjam' => [
                'type' => 'DATE',
            ],
            'f_tanggal_kembali' => [
                'type' => 'DATE',
            ],
            'f_status' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'f_riwayat' => [
                'type' => 'VARCHAR',
                'constraint' => '1000',
            ],
        ]);
        $this->forge->addKey('f_id', true);
        $this->forge->addForeignKey('f_id_buku','t_buku','f_id','CASCADE','CASCADE');
        $this->forge->addForeignKey('f_id_users','t_users','f_id','CASCADE','CASCADE');
        $this->forge->createTable('t_peminjaman');
    }

    public function down()
    {
        $this->forge->dropTable('t_peminjaman');
    }
}
