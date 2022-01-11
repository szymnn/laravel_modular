<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'author',
        'name',
    ];

    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\CategoriesFactory::new();
    }
}
