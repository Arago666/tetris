<?php

namespace App\Models\Order;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'building_perimeter',
        'long_side_bc_joints_count',
        'short_side_bc_joints_count',
        'long_side_wet_zone_bc_joints_count',
        'inside_bc_width_partition_count',
        'without_rack_corridor_partition_count',
        'with_rack_corridor_partition_count',
        'without_abutment_corridor_partition_count',
        'without_rack_exterior_corner_count',
        'with_rack_exterior_corner_count',
        'without_rack_interior_corner_count',
        'with_rack_interior_corner_count',
        'wall_adjacent_column_count',
        'freestanding_adjacent_column_count',
        'finishing_perimeter',
        'wet_room_without_razuklonki_area',
        'wet_room_with_razuklonki_area',
        'wet_room_perimeter',
        'shower_tray_without_partition',
        'shower_tray_with_one_partition',
        'shower_tray_with_two_partition',
        'shower_tray_with_three_partition',
        'flight_delivery_count',
        'supplier_to_object_distance',
        'general_construction_worker_count',
        'working_electricians_count',
        'working_plumbers_count',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
