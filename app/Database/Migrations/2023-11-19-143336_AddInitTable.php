<?php
// app\Database\Migrations\2023-11-19-143336_AddInitTable.php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class AddInitTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'bigint',
                'auto_increment' => true,
                'comment' => 'Primary Key.'
            ],

            'name' => [
                'type' => 'varchar',
                'constraint' => '128',
                'null' => true,
                'default' => null,
                'comment' => 'Text Field'
            ],

            'ct' => [
                'type' => 'datetime',
                'default' => '0000-00-00 00:00:00'
            ],

            'ut' => [
                'type' => 'datetime',
                'default' => new RawSql('CURRENT_TIMESTAMP'),
            ],

            'dt' => [
                'type' => 'datetime',
                'null' => true,
                'deafult' => null
            ],

            'st' => [
                'type' => 'ENUM',
                'constraint' => ["0", "1"],
                'default' => "1",
                'comment' => '狀態( 0:刪除, 1:啟用 )'
            ]
        
        ]);

        $this->forge->addPrimaryKey('id', 'info_id');
        if ($this->forge->createTable('info_table', false)) {
            $this->db->query('ALTER TABLE `info_table` AUTO_INCREMENT=1001');
            $this->db->query('ALTER TABLE `info_table` comment "Test for Create Table";');
        }

    }

    public function down()
    {
        $this->forge->dropTable('info_table');
    }
}