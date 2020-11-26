<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        protected $table = "tblorder";
        protected $fillable = ['nama_toko','alamat','kode_booking','no_resi','marketplace','catatan'];
}
