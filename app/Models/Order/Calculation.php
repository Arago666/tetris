<?php

namespace App\Models\Order;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'order_id',
        'total_price',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
