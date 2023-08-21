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
        Schema::create('tb_data_penduduk_per_usia', function (Blueprint $table) {
            $table->id();
            $table->integer('u0-5');
            $table->integer('u6-9');
            $table->integer('u10-16');
            $table->integer('u17-25');
            $table->integer('u26-30');
            $table->integer('u31-35');
            $table->integer('u36-40');
            $table->integer('u41-45');
            $table->integer('u46-50');
            $table->integer('u51-keatas');
            $table->year('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_data_penduduk_per_usia');
    }
};
