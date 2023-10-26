<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserContainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'container_name' => 'Test',
                'container_config' => '2340234098234098234034',
                'container_id' => 'IUERF2J',
                'container_gtm_id' => 'GTM-IUERF2J',
                'container_location' => 2,
                'container_use_custom_subdomain' => 1,
                'container_domain' => 'shoplook.com',
                'container_subdomain' => 'mytaggingsub',
                'container_tagging_server_url' => 'mytaggingsub.shoplook.com',
                'container_plan' => 2,
                'container_billing_period' => 2,
                'container_next_billing_cycle' => date("Y-m-d H:i:s"),
                'container_plan_autoupgrade' => 0,
                'container_status' => 1
            ],
            [
                'container_name' => 'Drone',
                'container_config' => 'dfgdf3453453535',
                'container_id' => 'HJIO1S',
                'container_gtm_id' => 'GTM-HJIO1S',
                'container_location' => 1,
                'container_use_custom_subdomain' => 1,
                'container_domain' => 'droneshop.com',
                'container_subdomain' => 'dronetaggingsub',
                'container_tagging_server_url' => 'dronetaggingsub.droneshop.com',
                'container_plan' => 1,
                'container_billing_period' => 1,
                'container_next_billing_cycle' => date("Y-m-d H:i:s"),
                'container_plan_autoupgrade' => 1,
                'container_status' => 0
            ]
        ];

        DB::table('user_containers')->insert($data);
    }
}
