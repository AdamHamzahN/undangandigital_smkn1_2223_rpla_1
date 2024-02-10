<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kartu_ucapan extends Model
{
    use HasFactory;
    protected $table = 'kartu_ucapans';
    protected $primarykey = 'id_ucapan';
    protected $fillable = ['id_undangan','ucapan','nama'];
    public $timestamps = false;
}
