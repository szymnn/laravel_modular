<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bans extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user',
        'admin',
        'reason',
    ];

    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\BansFactory::new();
    }
}
