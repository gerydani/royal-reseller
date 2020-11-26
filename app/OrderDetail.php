<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "tblorder_detail";
    protected $fillable = ['kode_produk','qty','harga'];
}
