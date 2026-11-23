<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'monthly_price',
        'annual_price',
        'annual_total',
        'features_en',
        'features_ar',
        'featured',
    ];

    protected $casts = [
        'features_en' => 'array',
        'features_ar' => 'array',
        'featured' => 'boolean',
    ];
}