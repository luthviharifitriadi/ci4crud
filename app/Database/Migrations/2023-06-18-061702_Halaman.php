<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Halaman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'halaman_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'halaman_judul' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'halama_isi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('halaman_id', true);
        $this->forge->createTable('halaman');
    }

    public function down()
    {
        $this->forge->dropTable('halaman');
    }
}
