<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'detail', 'price'
    ];

    //one product has many sales
    public function sale(): HasMany{
        return $this->hasMany(
            related: Sale::class,
            foreignKey: 'product_id',
        );
    }
}
