<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // quali proprietà possono essere compilate in massa (fillable)
    protected $fillable = ['title','description','thumb','price','series','sale_date','type'];
}
