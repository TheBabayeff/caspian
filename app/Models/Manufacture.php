<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    use HasFactory;

    protected $table = 'manufactures';

    protected $fillable = ['title'  , 'slug' , 'description', 'images', 'video', 'is_visible',];


    protected $casts = [
        'images' => 'array',
        'is_visible' => 'boolean',
    ];

}
