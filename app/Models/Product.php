<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'price',
        'stock',
        'description',
        'image'
    ];

    public static function getProductsFromOneToFive()
    {
        return self::whereBetween('id', [1, 5])->get();
    }

    public static function getLatestTwoProducts()
    {
        return self::latest('id')->limit(2)->get();
    }

    public static function getProductById($id)
    {
        return self::find($id);
    }

}
