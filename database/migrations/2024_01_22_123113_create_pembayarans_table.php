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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->integer('id_pembayaran', true, true)->nullable(false);
            $table->integer('id_pesanan')->index('id_pesanan');
            $table->enum('status_pembayaran', ['lunas', 'belum lunas'])->default('belum lunas');
            $table->date('tanggal_pembayaran')->nullable(false);

            $table->foreign('id_pesanan')->references('id_pesanan')
                ->on('pesanans')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
