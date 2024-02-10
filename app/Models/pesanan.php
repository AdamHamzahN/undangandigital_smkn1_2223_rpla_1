<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanans';
    protected $primarykey = 'id_pesanan';
    protected $fillable = ['id_paket','id_admin','id_pemesan','id_undangan'];
    public $timestamps = true;
}
