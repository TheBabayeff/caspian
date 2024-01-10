<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
    ];

    protected $casts = [
        'manufacture' => 'array',
        'sector' => 'array',
    ];

    public function manufactures(): BelongsToMany
    {
        return $this->belongsToMany(Manufacture::class, 'manufacture_product', 'product_id', 'manufacture_id');
    }

    public function sectors(): BelongsToMany
    {
        return $this->belongsToMany(Sector::class, 'sector_product', 'product_id', 'sector_id');
    }

}
