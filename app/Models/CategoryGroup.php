<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryGroup extends Model
{
    use HasFactory;

    protected $table = 'categories_group';
    protected $fillable = ['name', 'slug'];

    public function categories()
    {
        return $this->hasMany(Category::class, 'parent_cat_id');
    }
}
