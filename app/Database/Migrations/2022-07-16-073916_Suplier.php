<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Suplier extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_suplier' => [
                'type' => 'INT'
            ],
            'nama_suplier' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'alamat' => [
                'type' => 'TEXT',
            ],
            'kota' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'telp' => [
                'type' => 'INT'
            ]
        ]);
        $this->forge->addKey('kode_suplier', true);
        $this->forge->createTable('suplier');
    }

    public function down()
    {
        $this->forge->dropTable('suplier');
    }
}
