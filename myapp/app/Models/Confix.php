<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Confix extends Model
{
    protected $table = 'confix';
        protected $fillable = [
        'mail1',
        'contact',
        'title',
        'description',
        'lang',
        'hotline',
        'address'
    ];
}
