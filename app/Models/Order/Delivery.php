<?php

namespace App\Models\Order;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'floor_panels_in_container_delivery',
        'irrevocable_20ft_container_count',
        'irrevocable_40ft_container_count',
        'special_packaging',
        'from_kaluga_distance',
        'from_penza_distance',
        'delivery_from_factory',
        'transshipment_point_count',
        'seasonality_dependence',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
