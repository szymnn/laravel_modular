<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'image',
        'categories',
        'amount',
        'price',
        'product_owner',
        'additional_info'
    ];

    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\ProductFactory::new();
    }
}
