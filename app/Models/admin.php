<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AutenteikasiAdmin;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class admin extends AutenteikasiAdmin
{
    use HasFactory,HasApiTokens,Notifiable;
    protected $table = 'admins';
    protected $primaryKey = 'id_admin';
    protected $fillable = ['nama_admin','password'];
    protected $hidden = ['nama_admin','password'];
    public $timestamps = false;

}
