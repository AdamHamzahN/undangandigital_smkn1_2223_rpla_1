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
           $table->int('id_undangan',11,true,true)->nullable(false);
           $table->int('id_pengantin',11,false,false)->nullable(false)->index('id_pengantin');

           $table->foreign('id_pengantin')->on('pengantin')
                            ->references('id_pengantin')
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
