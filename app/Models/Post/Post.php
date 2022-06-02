<?php

namespace App\Models\Post;

use App\Models\Category\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

protected $fillable = [
    'name',
    'title',
    'slug',
    'banner',
    'content'
];

    public function categoris()
    {
        return $this->hasMany(Category::class );
    }
}
