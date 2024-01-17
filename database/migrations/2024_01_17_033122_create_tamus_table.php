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
        Schema::create('tamus', function (Blueprint $table) {
            $table->int('id_tamu', true, false)->nullable(false);
            $table->string('nama_tamu', 100)->nullable(false);
            $table->int('id_undangan', 10, false, false)->nullable(false)->index('id_undangan');

            $table->foreign('id_undangan')->on('undangan')
                ->references('id_undangan')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tamus');
    }
};
