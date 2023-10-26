<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_containers', function (Blueprint $table) {
            $table->id();
            $table->string('container_name');
            $table->string('container_config')->unique();
            $table->string('container_id')->unique();
            $table->string('container_gtm_id')->unique();
            $table->integer('container_location')->unsigned();
            $table->boolean('container_use_custom_subdomain');
            $table->string('container_domain');
            $table->string('container_subdomain');
            $table->string('container_tagging_server_url');
            $table->integer('container_plan'); // price plan
            $table->integer('container_billing_period'); // number of months
            $table->timestamp('container_next_billing_cycle'); // reset requests and process payment
            $table->integer('container_plan_autoupgrade'); // upgrade to higher plan when max requests
            $table->boolean('container_status'); // 0 = disabled, 1 = enabled, 2 = pending
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_containers');
    }
};
