<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'parent_id'

    ];

    public function parent()
    {
        return $this->belongsToMany(Category::class , 'category_id');
    }

    public function childe()
    {
        return $this->belongsTo (Category::class , 'parent_id');

    }
    

    public function posts()
    {
        return $this->hasMany(Post::class );
    }

    public function getParentName()
    {
        return is_null($this->parent) ? 'ندارد' : $this->parent->name;
    }
}
