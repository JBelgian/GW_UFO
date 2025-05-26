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
        Schema::create('sightings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->timestamp('date_time');
            $table->string('location');
            $table->string('description');
            $table->integer('category');
            $table->string('photo')->nullable();
            $table->integer('ufo')->default(0);
            $table->integer('no_ufo')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sightings');
    }
};
