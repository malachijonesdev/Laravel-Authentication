<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'plan_name' => 'Free',
                'plan_price' => 0,
                'plan_max_requests' => 10000,
                'plan_total_servers' => 1,
                'plan_features' => json_encode(['Compliancy' => 'EU', 'Backup' => 1])
            ],
            [
                'plan_name' => 'Basis',
                'plan_price' => 25,
                'plan_max_requests' => 50000,
                'plan_total_servers' => 1,
                'plan_features' => json_encode(['Compliancy' => 'EU', 'Backup' => 1])
            ],
            [
                'plan_name' => 'Medium',
                'plan_price' => 80,
                'plan_max_requests' => 100000,
                'plan_total_servers' => 2,
                'plan_features' => json_encode(['Compliancy' => 'EU', 'Backup' => 1])
            ],
            [
                'plan_name' => 'Medium',
                'plan_price' => 150,
                'plan_max_requests' => 250000,
                'plan_total_servers' => 3,
                'plan_features' => json_encode(['Compliancy' => 'EU', 'Backup' => 1])
            ],
            [
                'plan_name' => 'Pro',
                'plan_price' => 200,
                'plan_max_requests' => 500000,
                'plan_total_servers' => 3,
                'plan_features' => json_encode(['Compliancy' => 'EU', 'Backup' => 1])
            ],
        ];

        DB::table('plans')->insert($data);
    }
}
