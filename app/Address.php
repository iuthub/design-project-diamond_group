<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['firstname', 'lastname', 'address', 'phonenumber'];

}
