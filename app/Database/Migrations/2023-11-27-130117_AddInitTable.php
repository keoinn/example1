<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddInitTable extends Migration
{
    public function up()
    {
        // 建立資料欄位
        $this->forge->addField([
            'id' => [ // 1個欄位
                'type' => 'bigint',
                'auto_increment' => true,
                'comment' => '主鍵'
            ], 

            'name' => [
                'type' => 'varchar',
                'constraint' => '128',
                'null' => true,
                'default' => null
            ],

            'ct' => [
               'type' => 'datetime',
               'null' => true,
               'default' => null,
            ],

            'ut' => [
                'type' => 'datetime',
                'null' => true,
                'default' => null,
            ],

            'dt' => [
                'type' => 'datetime',
                'null' => true,
                'default' => null,
            ],

            'st' => [
                'type' => 'enum',
                'constraint' => ['0', '1'],
                'default' => '0',
            ]
        ]);


        $this->forge->addPrimaryKey('id', 'info_pk');// 建立資料表
        $this->forge->createTable('info_table', true);

    }

    public function down()
    {
        $this->forge->droptalbe('info_table');
    }
}
