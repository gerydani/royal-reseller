<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "tblorder";
    protected $fillable = ['shop_id', 'address', 'booking_code', 'no_resi', 'notes', 'trx_date'];

    public function nama_toko()
    {
        return $this->belongsTo('App\toko', 'id', 'shop_id');
    }
}
