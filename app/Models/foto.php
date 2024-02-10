<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
    use HasFactory;
    protected $table = 'fotos';
    protected $primarykey = 'id_foto';
    protected $fillable = ['nama_foto','id_undangan'];
    public $timestamps = false;
}
