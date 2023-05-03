<?php

namespace App\Models\Order\Complectation;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplectationColorSolution extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'metal_frame_floor_panels',
        'metal_frame_racks',
        'external_stair',
        'entrance_groups_stair_support_railing',
        'entrance_groups_visors',
        'roof_covering_of_gable',
        'roofing_drain_snow_retention',
        'exterior_metal_doors',
        'exterior_window',
        'exterior_plinth',
        'exterior_wall_sp',
        'interior_wall_sp',
        'interior_interior_door',
        'interior_sanitary_partition',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
