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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->integer('id_pesanan', true, false)->nullable(false);
            $table->integer('id_paket')->index('id_paket');
            $table->integer('id_admin')->index('id_admin');
            $table->integer('id_pemesan')->index('id_pemesan');
            $table->integer('id_undangan')->nullable(false)->index('id_undangan');
            $table->timestamps();

            $table->foreign('id_paket')->on('pakets')
                ->references('id_paket')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_admin')->on('admins')
                ->references('id_admin')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('id_pemesan')->on('pemesans')
                ->references('id_pemesan')
                ->onUpdate('cascade')
                ->onDelete('cascade');

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
        Schema::dropIfExists('pesanans');
    }
};
