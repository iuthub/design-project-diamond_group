<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Results extends Model
{
    protected $fillable = [
    	'id', 'products','description','images', 'price'
    ];
}
