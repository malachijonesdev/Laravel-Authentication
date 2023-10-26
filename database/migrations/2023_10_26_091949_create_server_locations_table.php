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
        Schema::create('server_locations', function (Blueprint $table) {
            $table->id();
            $table->string('server_provider');
            $table->string('server_location_name');
            $table->string('server_location_country');
            $table->string('server_location_ip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('server_locations');
    }
};
