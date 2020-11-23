<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    protected $table ='tbluser';
    protected $fillable = [
        'username', 'bck_pass', 'password','namaowner','namatoko','email','nohp','id_toko'
    ];
}
