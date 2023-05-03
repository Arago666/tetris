<?php

namespace App\Models\Order\Complectation;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplectationFurnitureAndAccessory extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'office_visitor_chair',
        'head_desk',
        'head_desk_console',
        'corner_office_desk',
        'office_armchair',
        'office_wardrobe',
        'semi_closed_filing_cabinet',
        'document_rack',
        'head_armchair',
        'office_pedestal',
        'conference_room_modular_table',
        'negotiations_oval_table',
        'triple_eco_leather_office_sofa',
        'modular_dining_table',
        'kitchen_chair',
        'workers_dormitory_wardrobe',
        'workers_dormitory_desk',
        'workers_dormitory_bedside_pedestal',
        'single_tier_metal_bed',
        'double_tier_metal_bed',
        'wooden_single_bed',
        'wooden_double_bed',
        'sleeping_accessories_set',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
