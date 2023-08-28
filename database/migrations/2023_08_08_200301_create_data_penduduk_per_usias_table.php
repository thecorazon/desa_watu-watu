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
            $table->integer('u0_5');
            $table->integer('u6_9');
            $table->integer('u10_16');
            $table->integer('u17_25');
            $table->integer('u26_30');
            $table->integer('u31_35');
            $table->integer('u36_40');
            $table->integer('u41_45');
            $table->integer('u46_50');
            $table->integer('u51_keatas');
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
