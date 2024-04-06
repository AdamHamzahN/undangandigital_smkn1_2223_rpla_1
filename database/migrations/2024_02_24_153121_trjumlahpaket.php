<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
         CREATE TRIGGER TRJumlahPaket after insert ON pesanans FOR EACH ROW
            begin
            update pakets set jumlah_pembelian_paket = jumlah_pembelian_paket + 1 where id_paket =new.id_paket;
            end
       ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER "TRJumlahPaket');
    }
};
