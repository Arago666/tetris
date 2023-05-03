<?php

namespace App\Models\Order;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineeringSystem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'plumbing',
        'hot_water_supply',
        'individual_water_heater',
        'common_water_heater',
        'self_assembled_shower_cabin',
        'purchased_assembled_shower_cabin',
        'washbasin',
        'toilet_bowl',
        'urinal',
        'release_strapping_under_building',
        'pipe_insulation_under_building',
        'electric',
        'building_power_supply_reliability_category',
        'socket',
        'switche',
        'fixture',
        'heating',
        'heating_type',
        'heat_curtain',
        'heating_device_count',
        'ventilation',
        'conditioner',
        'shared_bathroom_ventilation_type',
        'individual_bathroom_ventilation_type',
        'fire_system',
        'alarm_system',
        'internal_water_supply',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
