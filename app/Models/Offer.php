<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name_uz',
        'name_ru',
        'name_en',
        'name_pl',
        'title_uz',
        'title_ru',
        'title_en',
        'title_pl',
        'price',
        'count',
        'country_uz',
        'country_ru',
        'country_en',
        'country_pl',
        'model',
        'color',
        'content_uz',
        'content_ru',
        'content_en',
        'content_pl',
        'pattern_uz',
        'pattern_ru',
        'pattern_en',
        'pattern_pl',
        'width',
        'height',
        'length',
        'density',
        'img'
    ];

    protected $casts = [
        'color' => 'json',
        'img' => 'json'
    ];
}
