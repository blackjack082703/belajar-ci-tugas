<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiskonSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        
        $data = [];
        $today = new \DateTime();

        for ($i = 0; $i < 10; $i++) {
            $date = clone $today;
            $date->modify("+{$i} day");

            $data[] = [
                'tanggal'    => $date->format('Y-m-d'),
                'nominal'    => $faker->numberBetween(10000, 100000),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }

        $this->db->table('diskon')->insertBatch($data);
    }
}
