<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resepsi extends Model
{
    use HasFactory;
    protected $table = 'resepsis';
    protected $primarykey = 'id_resepsi';
    protected $fillable = ['id_pengantin','waktu','nama_tempat','koordinat'];
    public $timestamps = false;
}
