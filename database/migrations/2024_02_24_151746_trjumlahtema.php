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
        CREATE TRIGGER TRjumlahTema after insert ON pesanans FOR EACH ROW
         BEGIN
         UPDATE temas SET jumlah_pembelian_tema = jumlah_pembelian_tema + 1 WHERE id_tema = NEW.id_tema;
        END
       ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER "TRjumlahTema"');
    }
};
