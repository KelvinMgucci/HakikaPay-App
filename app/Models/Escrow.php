<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Escrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_id',
        'seller_id',
        'amount',
        'description',
        'status',
    ];
    

    public function seller()
    {
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function delivery()
    {
        return $this->hasOne(Delivery::class);
    }

    public function disputes()
    {
        return $this->hasMany(Dispute::class);
    }
}
