<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'logo',
        'country',
        'website',
        'description',
        'sort_order',
        'is_active',
    ];
}