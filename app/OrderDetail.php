<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "tblorder_detail";
    protected $fillable = ['trx_id','prod_id','qty','capital_price','agreed_price'];

    public function nama_prod(){
        return $this->belongsTo('App\product','prod_id','prod_id');
    }
}
