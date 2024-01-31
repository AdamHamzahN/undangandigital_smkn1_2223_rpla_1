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
        Schema::create('pengantin', function (Blueprint $table) {
            $table->integer('id_pengantin',true,false)->nullable(false);
            $table->string('nama_pengantin_pria',200)->nullable(false);
            $table->string('nama_pengantin_wanita',200)->nullable(false);
            $table->string('nama_ayah_pria',200)->nullable(false);
            $table->string('nama_ibu_pria',200)->nullable(false);
            $table->string('nama_ayah_wanita',200)->nullable(false);
            $table->string('nama_ibu_wanita',200)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengantins');
    }
};
