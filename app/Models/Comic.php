<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = [
        // qui dentro ci si mette tutto quello che abbiamo messo noi nella migration
        'title',
        'slug',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type',
        'artists',
        'writers'
    ];
}
