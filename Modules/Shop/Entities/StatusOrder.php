<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusOrder extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'client_id',
        'product_id',
        'order_status',
    ];

    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\StatusOrderFactory::new();
    }
}
