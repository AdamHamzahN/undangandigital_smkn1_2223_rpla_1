<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class undangan extends Model
{
    use HasFactory;
    protected $table = 'undangans';
    protected $primarykey = 'id_pengantin';
    public $timestamps = false;
}
