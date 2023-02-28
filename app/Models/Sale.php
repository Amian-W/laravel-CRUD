<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id', 
        'product_id'
    ];

    //sale belongs to one client
    public function client(): BelongsTo {
        return $this->belongsTo(Client::class);
    }
    //sale belongs to one product
    public function product(): BelongsTo {
        return $this->belongsTo( Product::class );
    }
}
