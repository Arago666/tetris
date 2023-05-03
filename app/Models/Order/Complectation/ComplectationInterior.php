<?php

namespace App\Models\Order\Complectation;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplectationInterior extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'room_in_building_count',
        'inside_stair',
        'stainless_steel_stair_railing',
        'main_room_finishing_ceiling',
        'corridor_finishing_ceiling',
        'wet_and_wet_areas_finishing_ceiling',
        'sp_internal_partitions_length',
        'sp_internal_partitions_is_double',
        'sp_internal_partitions_thickness',
        'mdf_single_floor_door',
        'mdf_double_floor_door',
        'single_floor_metal_door',
        'double_floor_metal_door',
        'waterproof_door',
        'pvc_window_door',
        'window',
        'wall',
        'laminate_floor_area',
        'wet_and_wet_areas',
        'bc_with_wet_common_room_count',
        'bc_with_wet_room_count',
        'wet_individual_room_count',
        'wet_room_floor_covering',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
