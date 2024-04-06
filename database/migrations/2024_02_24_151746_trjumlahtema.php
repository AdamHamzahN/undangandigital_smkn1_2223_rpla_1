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
            CREATE TRIGGER TRJumlahTema after insert ON pesanans FOR EACH ROW
            begin
            update temas set jumlah_pembelian_tema = jumlah_pembelian_tema + 1 where id_tema =new.id_tema;
            end
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER "TRJumlahTema"');
    }
};
