<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tamu extends Model
{
    use HasFactory;
    protected $table = 'tamus';
    protected $primarykey = 'id_tamu';
    protected $fillable = ['id_undangan','nama_tamu'];
    public $timestamps = false;
}
