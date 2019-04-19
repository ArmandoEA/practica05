<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bolso extends Model
{
    protected $fillable = ['name', 'description', 'price', 'photo', 'slug'];
}
