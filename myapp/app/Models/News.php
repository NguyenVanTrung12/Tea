<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class News extends Model
{
    //
    use HasFactory;
    protected $table = 'new';
    protected $fillable = ['categoryId','name','image','date', 'detail', 'content', 'title','description', 'active'];
    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }
}
