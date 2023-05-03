<?php

namespace App\Models\Order;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mounting extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'from_moscow_distance',
        'work_weather_condition',
        'tool_return',
        'foundation',
        'crane_with_crane_operator',
        'construction_debris',
        'platform_for_material',
        'access_road',
        'electricity',
        'technical_water_and_toilet',
        'food_is_provided_by_customer',
        'meals_within_walking_distance',
        'accommodation_provided_by_customer',
        'accommodation_within_walking_distance',
        'bath_and_laundry_service',
        'limited_working_day',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
