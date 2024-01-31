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
        Schema::create('backsounds', function (Blueprint $table) {
            $table->integer('id_backsound',11,true,false)->nullable(false);
            $table->string('nama_musik',200)->nullable(false);
            $table->integer('id_undangan')->nullable(false)->index('id_undangan');

            $table->foreign('id_undangan')->on('undangans')
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
        Schema::dropIfExists('backsounds');
    }
};
