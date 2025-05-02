<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimulatedEscrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_id',
        'seller_id',
        'amount',
        'delivery_time',
        'is_confirmed',
        'is_released',
    ];

    protected $casts = [
        'delivery_time' => 'datetime',
    ];

    public function buyer() {
        return $this->belongsTo(User::class, 'buyer_id');
    }
    
    public function seller() {
        return $this->belongsTo(User::class, 'seller_id');
    }
    
}
