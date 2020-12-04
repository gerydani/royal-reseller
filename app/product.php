<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='tblproduct';
    protected $fillable = [
        'id','prod_id','name','sku','capital_price','agreed_price','weight','dimension', 'status'
    ];
}
