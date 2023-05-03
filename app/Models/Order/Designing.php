<?php

namespace App\Models\Order;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designing extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'architectural_solution',
        'constructive_solution',
        'internal_power_electrical_equipment',
        'internal_water_supply_systems',
        'internal_heating_systems',
        'internal_ventilation_system',
        'fire_alarm_system',
        'structured_cabling_system',
        'lan_ip_telephony',
        'iptv_video_surveillance',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
