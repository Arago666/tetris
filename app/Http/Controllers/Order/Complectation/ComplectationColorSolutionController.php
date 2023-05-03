<?php

namespace App\Http\Controllers\Order\Complectation;

use App\Http\Controllers\Controller;
use App\Models\Order\Complectation\ComplectationColorSolution;
use Illuminate\Http\Request;

class ComplectationColorSolutionController extends Controller
{
    public function getComplectationColorSolution(int $orderId)
    {
        return response()->json(ComplectationColorSolution::where('order_id', $orderId)->first());
    }

    public function storeComplectationColorSolution(Request $request)
    {
        $complectationColorSolution = ComplectationColorSolution::create([
            'order_id'                                  => $request->order_id,
            'metal_frame_floor_panels'                  => $request->metal_frame_floor_panels,
            'metal_frame_racks'                         => $request->metal_frame_racks,
            'external_stair'                            => $request->external_stair,
            'entrance_groups_stair_support_railing'     => $request->entrance_groups_stair_support_railing,
            'entrance_groups_visors'                    => $request->entrance_groups_visors,
            'roof_covering_of_gable'                    => $request->roof_covering_of_gable,
            'roofing_drain_snow_retention'              => $request->roofing_drain_snow_retention,
            'exterior_metal_doors'                      => $request->exterior_metal_doors,
            'exterior_window'                           => $request->exterior_window,
            'exterior_plinth'                           => $request->exterior_plinth,
            'exterior_wall_sp'                          => $request->exterior_wall_sp,
            'interior_wall_sp'                          => $request->interior_wall_sp,
            'interior_interior_door'                    => $request->interior_interior_door,
            'interior_sanitary_partition'               => $request->interior_sanitary_partition,
        ]);

        return response()->json($complectationColorSolution);
    }

    public function updateComplectationColorSolution(Request $request, $id)
    {
        ComplectationColorSolution::where('id', $id)->update([
            'order_id'                                  => $request->order_id,
            'metal_frame_floor_panels'                  => $request->metal_frame_floor_panels,
            'metal_frame_racks'                         => $request->metal_frame_racks,
            'external_stair'                            => $request->external_stair,
            'entrance_groups_stair_support_railing'     => $request->entrance_groups_stair_support_railing,
            'entrance_groups_visors'                    => $request->entrance_groups_visors,
            'roof_covering_of_gable'                    => $request->roof_covering_of_gable,
            'roofing_drain_snow_retention'              => $request->roofing_drain_snow_retention,
            'exterior_metal_doors'                      => $request->exterior_metal_doors,
            'exterior_window'                           => $request->exterior_window,
            'exterior_plinth'                           => $request->exterior_plinth,
            'exterior_wall_sp'                          => $request->exterior_wall_sp,
            'interior_wall_sp'                          => $request->interior_wall_sp,
            'interior_interior_door'                    => $request->interior_interior_door,
            'interior_sanitary_partition'               => $request->interior_sanitary_partition,
        ]);

        return response()->json('ComplectationColorSolution updated successfully!');
    }
}
