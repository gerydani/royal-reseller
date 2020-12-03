<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='tblproduct';
    protected $fillable = [
        'id','kode_produk','name','sku','capital_price','agreed_price','weight','dimension', 'status'
    ];
}
