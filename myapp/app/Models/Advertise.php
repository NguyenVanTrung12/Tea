<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    protected $table = 'advertise';
    protected $fillable = ['name' , 'image' , 'content' , 'position' , 'active'];
}
