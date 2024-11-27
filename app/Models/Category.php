<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'parent_cat_id'];

    public function group()
    {
        return $this->belongsTo(CategoryGroup::class, 'parent_cat_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }


}
