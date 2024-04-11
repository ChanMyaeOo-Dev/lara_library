<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'description', 'excerpt', 'author', 'category_id', 'qty'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function users()
    {
        return $this->hasManyThrough(
            User::class, // The related model
            Transaction::class, // The intermediate model
            'book_id', // Foreign key on the intermediate model
            'id', // Foreign key on the related model
            'id', // Local key on the book model
            'user_id' // Local key on the intermediate model
        )->where("is_returned", '=', false);
    }
}
