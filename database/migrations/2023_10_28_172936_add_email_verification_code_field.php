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
        Schema::table('users', function ($table) {
            $table->timestamp('email_verification_skipped_at')->nullable()->after('email_verified_at');
            $table->unsignedBigInteger('email_verification_code')->nullable()->after('email_verification_skipped_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('email_verification_code');
        });
    }
};
