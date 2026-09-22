<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropFotoFromFoodPickupsTable extends Migration
{
    public function up()
    {
        if ($this->db->tableExists('food_pickups') && $this->db->fieldExists('foto', 'food_pickups')) {
            $this->forge->dropColumn('food_pickups', 'foto');
        }
    }

    public function down()
    {
        if ($this->db->tableExists('food_pickups') && !$this->db->fieldExists('foto', 'food_pickups')) {
            $this->forge->addColumn('food_pickups', [
                'foto' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                    'null' => true,
                ],
            ]);
        }
    }
}

