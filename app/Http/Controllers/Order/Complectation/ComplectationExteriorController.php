<?php

namespace App\Http\Controllers\Order\Complectation;

use App\Http\Controllers\Controller;
use App\Models\Order\Complectation\ComplectationExterior;
use Illuminate\Http\Request;

class ComplectationExteriorController extends Controller
{
    public function getComplectationExterior(int $orderId)
    {
        return response()->json(ComplectationExterior::where('order_id', $orderId)->first());
    }

    public function storeComplectationExterior(Request $request)
    {
        $complectationExterior = ComplectationExterior::create([
            'order_id'                          => $request->order_id,
            'external_wall_mounting_method'     => $request->external_wall_mounting_method,
            'external_wall_thickness'           => $request->external_wall_thickness,
            'fire_stair_count'                  => $request->fire_stair_count,
            'input_groups_count'                => $request->input_groups_count,
            'plinth'                            => $request->plinth,
            'drain'                             => $request->drain,
            'snow_retention'                    => $request->snow_retention,
            'single_floor_metal_door'           => $request->single_floor_metal_door,
            'double_floor_metal_door'           => $request->double_floor_metal_door,
            'main_double_leaf_window'           => $request->main_double_leaf_window,
            'main_single_leaf_window'           => $request->main_single_leaf_window,
            'main_window'                       => $request->main_window,
            'bathroom_window'                   => $request->bathroom_window,
            'pvc_stained_glass'                 => $request->pvc_stained_glass,
            'aluminum_stained_glass'            => $request->aluminum_stained_glass,
        ]);

        return response()->json($complectationExterior);
    }

    public function updateComplectationExterior(Request $request, $id)
    {
        ComplectationExterior::where('id', $id)->update([
            'order_id'                          => $request->order_id,
            'external_wall_mounting_method'     => $request->external_wall_mounting_method,
            'external_wall_thickness'           => $request->external_wall_thickness,
            'fire_stair_count'                  => $request->fire_stair_count,
            'input_groups_count'                => $request->input_groups_count,
            'plinth'                            => $request->plinth,
            'drain'                             => $request->drain,
            'snow_retention'                    => $request->snow_retention,
            'single_floor_metal_door'           => $request->single_floor_metal_door,
            'double_floor_metal_door'           => $request->double_floor_metal_door,
            'main_double_leaf_window'           => $request->main_double_leaf_window,
            'main_single_leaf_window'           => $request->main_single_leaf_window,
            'main_window'                       => $request->main_window,
            'bathroom_window'                   => $request->bathroom_window,
            'pvc_stained_glass'                 => $request->pvc_stained_glass,
            'aluminum_stained_glass'            => $request->aluminum_stained_glass,
        ]);

        return response()->json('ComplectationExterior updated successfully!');
    }
}
