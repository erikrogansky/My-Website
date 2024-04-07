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
        Schema::create('visitors_information', function (Blueprint $table) {
            $table->id();
            $table->string('session_id', 255)->unique();
            $table->string('ip_address', 45);
            $table->text('user_agent');
            $table->json('device_information');
            $table->json('geolocation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors_information');
    }
};
