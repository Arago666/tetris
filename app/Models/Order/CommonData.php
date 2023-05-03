<?php

namespace App\Models\Order;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommonData extends Model
{
    public const BLOCK_SIZE_3 = '6 х 3';
    public const BLOCK_SIZE_2_45 = '6 х 2,45';

    use HasFactory;

    protected $fillable = [
        'id',
        'order_id',
        'building_purpose',
        'block_size',
        'building_configuration',
        'floor_count',
        'block_in_one_row_count',
        'overlap_type',
        'corridor_width',
        'clear_ceiling_height',
        'climatic_region',
        'region_seismicity',
        'climatic_zone',
        'fire_resistance_degree',
        'constructive_fire_hazard_class',
        'functional_fire_hazard_class',
        'building_responsibility_level',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
