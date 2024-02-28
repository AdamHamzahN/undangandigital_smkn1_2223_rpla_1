<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanans';
    protected $primarykey = 'id_pesanan';
    protected $fillable = ['id_paket','id_tema','id_pemesan','id_undangan'];
    public $timestamps = true;

    // public function undangan():HasOne
    // {
    //     return $this->hasOne(undangan::class,'id_undangan','id_undangan');
    // }

    public function pemesan():HasOne
    {
        return $this->hasOne(undangan::class,'id_pemesan','id_pemesan');
    }
}
