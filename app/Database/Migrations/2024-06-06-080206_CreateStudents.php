<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStudents extends Migration
{
    public function up()
    {
        // used to give schema or structure of a database table.
        $this->forge->addField([
            "id"=>[
                "type"=>"INT",
                "constraint"=>5,
                "auto_increment"=>true,
                "unsigned"=>true
            ],
            "name"=>[
                "type"=>"VARCHAR",
                "constraint"=> 50,
                "null"=> false
            ],
            "email"=>[
                "type"=>"VARCHAR",
                "constraint"=> 50,
                "null"=> false,
                "unique"=> true
            ],
            "mobile"=>[
                "type"=> "VARCHAR",
                "constraint"=> 30,
                "null"=> true
            ]
        ]);

        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("students");

    }

    public function down()
    {
        // used to drop a table from database.
         $this->forge->dropTable("students");
    }
}
