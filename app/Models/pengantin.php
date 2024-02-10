<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengantin extends Model
{
    use HasFactory;
    protected $table = 'pengantins';
    protected $primarykey = 'id_pengantin';
    protected $fillable = [
        'nama_pengantin_pria',
        'nama_pengantin_wanita',
        'nama_ayah_pria',
        'nama_ibu_pria',
        'nama_ayah_wanita',
        'nama_ibu_wanita'
    ];
    public $timestamps = false;
}
