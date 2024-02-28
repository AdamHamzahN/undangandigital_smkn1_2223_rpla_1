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
        Schema::create('akads', function (Blueprint $table) {
            $table->integer('id_akad',true,false)->nullable(false);
            $table->datetime('waktu')->nullable(false);
            $table->text('nama_tempat')->nullable(false);
            $table->text('koordinat')->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akads');
    }
};
