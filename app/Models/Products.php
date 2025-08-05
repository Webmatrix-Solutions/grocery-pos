<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'name',
        'barcode',
        'price',
        'stock_quantity',
        'category',
        'description',
    ];

    // Additional model methods can be added here
}
