<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NoteModel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'note_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'note_title' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'note_content' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'note_created_at' => [
                'type' => 'TIMESTAMP',
                'null' => false,
            ],
        ]);
        $this->forge->addKey('note_id', true);
        $this->forge->createTable('notes');
    }

    public function down()
    {
        $this->forge->dropTable('notes');
    }
}
