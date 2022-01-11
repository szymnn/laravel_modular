<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannedCategories extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'categories_id',
    ];

    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\BannedCategoriesFactory::new();
    }
}
