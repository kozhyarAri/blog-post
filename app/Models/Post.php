<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getImageAttribute($value)
    {
        return $value ? asset('storage/' . $value) : null;
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
