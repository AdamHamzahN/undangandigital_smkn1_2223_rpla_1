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
        Schema::create('undangans', function (Blueprint $table) {
            $table->integer('id_undangan', true, false)->nullable(false);
            $table->integer('id_pengantin')->nullable(false)->index('id_pengantin');
            $table->integer('id_akad')->nullable(false)->index('id_akad');
            $table->integer('id_resepsi')->nullable(false)->index('id_resepsi');


            $table->foreign('id_pengantin')->on('pengantin')
                ->references('id_pengantin')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_akad')->on('akads')
                ->references('id_akad')
                ->onUpdate('cascade')
                ->onDelete('cascade');
                
            $table->foreign('id_resepsi')->on('resepsis')
                ->references('id_resepsi')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('undangans');
    }
};
