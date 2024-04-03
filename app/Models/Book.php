<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'description', 'excerpt', 'author', 'category_id', 'qty'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
