<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    use HasFactory;
    protected $table = 'pakets';
    protected $primarykey = 'id_paket';
    protected $fillable = ['nama_paket','detail_paket','harga'];
    public $timestamps = true;
}
