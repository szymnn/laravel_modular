<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class SellerOpinions extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'client',
        'seller',
        'opinion',
        'rate',
    ];

    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\SellerOpinionsFactory::new();
    }
}
