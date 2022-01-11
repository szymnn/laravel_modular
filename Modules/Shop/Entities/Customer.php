<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'adress',
        'nick',
        'password',
    ];

    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\CustomerFactory::new();
    }
}
