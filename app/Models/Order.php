<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['surname', 'name', 'adress', 'town', 'oblast', 'postalcode', 'email', 'phone', 'total'];


    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('count')->withTimestamps();
    }

    public function getFullPrice()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->getPriceForCount() * $product->pivot->count;
        }
        return $sum;
    }


    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }
}
