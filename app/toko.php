<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class toko extends Model
{
    protected $table ='tbltoko';
    protected $fillable = [
        'id_user','marketplace','nama_toko', 'username_mp', 'password_mp', 'status'
    ];
    public function infotoko(){
        return $this->belongsTo('App\User','id_user','id');
    }
    public function marketplaces(){
        return $this->belongsTo('App\Marketplace','marketplace','id');
    }
}
