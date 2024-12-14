<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = ['name','ram','ssd','price_noma','price_sale','description','content','avatar','images'];
}
