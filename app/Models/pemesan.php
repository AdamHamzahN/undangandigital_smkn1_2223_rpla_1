<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesan extends Model
{
    use HasFactory;
    protected $table = 'pemesans';
    protected $primarykey = 'id_pemesan';
    protected $fillable = ['nama_pemesan','kontak'];
    public $timestamps = false;
}
