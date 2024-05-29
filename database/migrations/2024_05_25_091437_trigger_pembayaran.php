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
        DB::unprepared(
            '
            CREATE TRIGGER TRpembayaran AFTER INSERT ON pesanans FOR EACH ROW
            begin
                INSERT INTO pembayarans (id_pesanan, status_pembayaran, created_at, updated_at)
                VALUES (NEW.id_pesanan, "belum lunas", NOW(), NOW());
            end
            '
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER "TRpembayaran"');
    }
};
