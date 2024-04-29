<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'phone',
        'status',
        'note',
        'date',
    ];

    protected function casts(): array
    {
        return [
            'status' => 'array',
        ];
    }
}
