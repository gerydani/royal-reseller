<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "tblorder_detail";
    protected $fillable = ['trx_id','kode_produk','qty','harga'];
}