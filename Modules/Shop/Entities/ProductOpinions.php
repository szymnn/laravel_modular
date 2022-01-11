<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductOpinions extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'client',
        'product',
        'opinion',
        'rate',
    ];

    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\ProductOpinionsFactory::new();
    }
}
