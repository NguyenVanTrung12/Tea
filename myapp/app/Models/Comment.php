<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comment';

    protected $fillable = ['newId', 'name', 'email', 'comment', 'date', 'rate'];
    public function new()
    {
        return $this->belongsTo(News::class, 'newId');
    }
}
