<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = 'new';
    protected $fillable = ['categoryId','name','image','date', 'detail', 'content', 'title','description', 'active'];
    public function category()
    {
        return $this->belongsTo(Category::class, 'categoryId');
    }
}
