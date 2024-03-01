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
    //     DB::unprepared('
    //     CREATE TRIGGER TRjumlahPaket after insert ON pesanans FOR EACH ROW
    //      BEGIN
    //      UPDATE temas SET jumlah_pembelian_paket = jumlah_pembelian_paket + 1 WHERE id_paket = NEW.id_paket;
    //     END
    //    ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER "TRjumlahTema"');
    }
};
