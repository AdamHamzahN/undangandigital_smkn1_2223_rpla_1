<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class backsound extends Model
{
    use HasFactory;
    protected $table = 'backsounds';
    protected $primarykey = 'id_backsound';
    protected $fillable = ['nama_musik','id_undangan'];
    public $timestamps = false;
}
