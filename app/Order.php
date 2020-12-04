<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        protected $table = "tblorder";
        protected $fillable = ['shop_id','address','booking_code','no_resi','trx_date','notes'];
}
