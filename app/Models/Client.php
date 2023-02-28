<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name', 'email', 'address', 'phone', 
    ];

    //one client has many sales
    public function sale(): HasMany{
        return $this->hasMany(
            related: Sale::class,
            foreignKey: 'client_id',
        );
    }
}
