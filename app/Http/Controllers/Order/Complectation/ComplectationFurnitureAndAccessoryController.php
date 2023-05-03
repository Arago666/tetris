<?php

namespace App\Http\Controllers\Order\Complectation;

use App\Http\Controllers\Controller;
use App\Models\Order\Complectation\ComplectationFurnitureAndAccessory;
use Illuminate\Http\Request;

class ComplectationFurnitureAndAccessoryController extends Controller
{
    public function getComplectationFurnitureAndAccessory(int $orderId)
    {
        return response()->json(ComplectationFurnitureAndAccessory::where('order_id', $orderId)->first());
    }

    public function storeComplectationFurnitureAndAccessory(Request $request)
    {
        $complectationFurnitureAndAccessory = ComplectationFurnitureAndAccessory::create([
            'order_id'                              => $request->order_id,
            'office_visitor_chair'                  => $request->office_visitor_chair,
            'head_desk'                             => $request->head_desk,
            'head_desk_console'                     => $request->head_desk_console,
            'corner_office_desk'                    => $request->corner_office_desk,
            'office_armchair'                       => $request->office_armchair,
            'office_wardrobe'                       => $request->office_wardrobe,
            'semi_closed_filing_cabinet'            => $request->semi_closed_filing_cabinet,
            'document_rack'                         => $request->document_rack,
            'head_armchair'                         => $request->head_armchair,
            'office_pedestal'                       => $request->office_pedestal,
            'conference_room_modular_table'         => $request->conference_room_modular_table,
            'negotiations_oval_table'               => $request->negotiations_oval_table,
            'triple_eco_leather_office_sofa'        => $request->triple_eco_leather_office_sofa,
            'modular_dining_table'                  => $request->modular_dining_table,
            'kitchen_chair'                         => $request->kitchen_chair,
            'workers_dormitory_wardrobe'            => $request->workers_dormitory_wardrobe,
            'workers_dormitory_desk'                => $request->workers_dormitory_desk,
            'workers_dormitory_bedside_pedestal'    => $request->workers_dormitory_bedside_pedestal,
            'single_tier_metal_bed'                 => $request->single_tier_metal_bed,
            'double_tier_metal_bed'                 => $request->double_tier_metal_bed,
            'wooden_single_bed'                     => $request->wooden_single_bed,
            'wooden_double_bed'                     => $request->wooden_double_bed,
            'sleeping_accessories_set'              => $request->sleeping_accessories_set,
        ]);

        return response()->json($complectationFurnitureAndAccessory);
    }

    public function updateComplectationFurnitureAndAccessory(Request $request, $id)
    {
        ComplectationFurnitureAndAccessory::where('id', $id)->update([
            'order_id'                              => $request->order_id,
            'office_visitor_chair'                  => $request->office_visitor_chair,
            'head_desk'                             => $request->head_desk,
            'head_desk_console'                     => $request->head_desk_console,
            'corner_office_desk'                    => $request->corner_office_desk,
            'office_armchair'                       => $request->office_armchair,
            'office_wardrobe'                       => $request->office_wardrobe,
            'semi_closed_filing_cabinet'            => $request->semi_closed_filing_cabinet,
            'document_rack'                         => $request->document_rack,
            'head_armchair'                         => $request->head_armchair,
            'office_pedestal'                       => $request->office_pedestal,
            'conference_room_modular_table'         => $request->conference_room_modular_table,
            'negotiations_oval_table'               => $request->negotiations_oval_table,
            'triple_eco_leather_office_sofa'        => $request->triple_eco_leather_office_sofa,
            'modular_dining_table'                  => $request->modular_dining_table,
            'kitchen_chair'                         => $request->kitchen_chair,
            'workers_dormitory_wardrobe'            => $request->workers_dormitory_wardrobe,
            'workers_dormitory_desk'                => $request->workers_dormitory_desk,
            'workers_dormitory_bedside_pedestal'    => $request->workers_dormitory_bedside_pedestal,
            'single_tier_metal_bed'                 => $request->single_tier_metal_bed,
            'double_tier_metal_bed'                 => $request->double_tier_metal_bed,
            'wooden_single_bed'                     => $request->wooden_single_bed,
            'wooden_double_bed'                     => $request->wooden_double_bed,
            'sleeping_accessories_set'              => $request->sleeping_accessories_set,
        ]);

        return response()->json('ComplectationFurnitureAndAccessory updated successfully!');
    }
}
