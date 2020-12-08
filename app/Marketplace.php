<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marketplace extends Model
{
    protected $table = "marketplace";
    protected $fillable = ['id','desc','name'];
}
