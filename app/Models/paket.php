<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket extends Model
{
    use HasFactory;
    protected $table = 'pakets';
    protected $primarykey = 'nama_paket';
    protected $fillable = ['detail_paket'];
    public $timestamps = true;
}
