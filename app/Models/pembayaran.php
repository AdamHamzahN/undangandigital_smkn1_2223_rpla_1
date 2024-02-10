<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayarans';
    protected $primarykey = 'id_pembayaran';
    protected $fillable = ['id_pesanan','status_pembayaran','tanggal_pembayaran'];
    public $timestamps = false;
}
