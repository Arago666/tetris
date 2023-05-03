<?php

namespace App\Http\Controllers\Order\Complectation;

use App\Http\Controllers\Controller;
use App\Models\Order\Complectation\ComplectationInterior;
use Illuminate\Http\Request;

class ComplectationInteriorController extends Controller
{
    public function getComplectationInterior(int $orderId)
    {
        return response()->json(ComplectationInterior::where('order_id', $orderId)->first());
    }

    public function storeComplectationInterior(Request $request)
    {
        $complectationInterior = ComplectationInterior::create([
            'order_id'                              => $request->order_id,
            'room_in_building_count'                => $request->room_in_building_count,
            'inside_stair'                          => $request->inside_stair,
            'stainless_steel_stair_railing'         => $request->stainless_steel_stair_railing,
            'main_room_finishing_ceiling'           => $request->main_room_finishing_ceiling,
            'corridor_finishing_ceiling'            => $request->corridor_finishing_ceiling,
            'wet_and_wet_areas_finishing_ceiling'   => $request->wet_and_wet_areas_finishing_ceiling,
            'sp_internal_partitions_length'         => $request->sp_internal_partitions_length,
            'sp_internal_partitions_is_double'      => $request->sp_internal_partitions_is_double,
            'sp_internal_partitions_thickness'      => $request->sp_internal_partitions_thickness,
            'mdf_single_floor_door'                 => $request->mdf_single_floor_door,
            'mdf_double_floor_door'                 => $request->mdf_double_floor_door,
            'single_floor_metal_door'               => $request->single_floor_metal_door,
            'double_floor_metal_door'               => $request->double_floor_metal_door,
            'waterproof_door'                       => $request->waterproof_door,
            'pvc_window_door'                       => $request->pvc_window_door,
            'window'                                => $request->window,
            'wall'                                  => $request->wall,
            'laminate_floor_area'                   => $request->laminate_floor_area,
            'wet_and_wet_areas'                     => $request->wet_and_wet_areas,
            'bc_with_wet_common_room_count'         => $request->bc_with_wet_common_room_count,
            'bc_with_wet_room_count'                => $request->bc_with_wet_room_count,
            'wet_individual_room_count'             => $request->wet_individual_room_count,
            'wet_room_floor_covering'               => $request->wet_room_floor_covering,
        ]);

        return response()->json($complectationInterior);
    }

    public function updateComplectationInterior(Request $request, $id)
    {
        ComplectationInterior::where('id', $id)->update([
            'order_id'                              => $request->order_id,
            'room_in_building_count'                => $request->room_in_building_count,
            'inside_stair'                          => $request->inside_stair,
            'stainless_steel_stair_railing'         => $request->stainless_steel_stair_railing,
            'main_room_finishing_ceiling'           => $request->main_room_finishing_ceiling,
            'corridor_finishing_ceiling'            => $request->corridor_finishing_ceiling,
            'wet_and_wet_areas_finishing_ceiling'   => $request->wet_and_wet_areas_finishing_ceiling,
            'sp_internal_partitions_length'         => $request->sp_internal_partitions_length,
            'sp_internal_partitions_is_double'      => $request->sp_internal_partitions_is_double,
            'sp_internal_partitions_thickness'      => $request->sp_internal_partitions_thickness,
            'mdf_single_floor_door'                 => $request->mdf_single_floor_door,
            'mdf_double_floor_door'                 => $request->mdf_double_floor_door,
            'single_floor_metal_door'               => $request->single_floor_metal_door,
            'double_floor_metal_door'               => $request->double_floor_metal_door,
            'waterproof_door'                       => $request->waterproof_door,
            'pvc_window_door'                       => $request->pvc_window_door,
            'window'                                => $request->window,
            'wall'                                  => $request->wall,
            'laminate_floor_area'                   => $request->laminate_floor_area,
            'wet_and_wet_areas'                     => $request->wet_and_wet_areas,
            'bc_with_wet_common_room_count'         => $request->bc_with_wet_common_room_count,
            'bc_with_wet_room_count'                => $request->bc_with_wet_room_count,
            'wet_individual_room_count'             => $request->wet_individual_room_count,
            'wet_room_floor_covering'               => $request->wet_room_floor_covering,
        ]);

        return response()->json('ComplectationInterior updated successfully!');
    }
}
