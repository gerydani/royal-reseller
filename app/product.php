<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table ='tblproduk';
    protected $fillable = [
        'id','kode_produk','nama_produk',
    ];
}