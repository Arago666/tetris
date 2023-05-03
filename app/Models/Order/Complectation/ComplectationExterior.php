<?php

namespace App\Models\Order\Complectation;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplectationExterior extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'order_id',
        'external_wall_mounting_method',
        'external_wall_thickness',
        'fire_stair_count',
        'input_groups_count',
        'plinth',
        'drain',
        'snow_retention',
        'single_floor_metal_door',
        'double_floor_metal_door',
        'main_double_leaf_window',
        'main_single_leaf_window',
        'main_window',
        'bathroom_window',
        'pvc_stained_glass',
        'aluminum_stained_glass',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
