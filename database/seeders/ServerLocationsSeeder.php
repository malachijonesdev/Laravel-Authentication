<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServerLocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'server_provider' => 'Scaleway',
                'server_location_name' => 'Amsterdam',
                'server_location_country' => 'NL',
                'server_location_ip' => long2ip(mt_rand())
            ],
            [
                'server_provider' => 'Scaleway',
                'server_location_name' => 'Paris',
                'server_location_country' => 'FR',
                'server_location_ip' => long2ip(mt_rand())
            ],
            [
                'server_provider' => 'Scaleway',
                'server_location_name' => 'Warsaw',
                'server_location_country' => 'PL',
                'server_location_ip' => long2ip(mt_rand())
            ]
        ];

        DB::table('server_locations')->insert($data);
    }
}
