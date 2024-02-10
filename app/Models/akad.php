<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akad extends Model
{
    use HasFactory;
    protected $table = 'akads';
    protected $primarykey = 'id_akad';
    protected $fillable = ['id_pengantin','waktu','nama_tempat','koordinat'];
    public $timestamps = false;
}
