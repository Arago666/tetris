<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order\CommonData;
use Illuminate\Http\Request;

class CommonDataController extends Controller
{
//    public function __construct()
//    {
//        return $this->middleware('auth:api');
//    }

    public function getCommonData(int $id)
    {
        return response()->json(CommonData::where('order_id', $id)->first());
    }

    public function storeCommonData(Request $request)
    {
        $commonData = CommonData::create([
            'order_id'                          => $request->order_id,
            'building_purpose'                  => $request->building_purpose,
            'block_size'                        => $request->block_size,
            'building_configuration'            => $request->building_configuration,
            'floor_count'                       => $request->floor_count,
            'block_in_one_row_count'            => $request->block_in_one_row_count,
            'overlap_type'                      => $request->overlap_type,
            'corridor_width'                    => $request->corridor_width,
            'clear_ceiling_height'              => $request->clear_ceiling_height,
            'climatic_region'                   => $request->climatic_region,
            'region_seismicity'                 => $request->region_seismicity,
            'climatic_zone'                     => $request->climatic_zone,
            'fire_resistance_degree'            => $request->fire_resistance_degree,
            'constructive_fire_hazard_class'    => $request->constructive_fire_hazard_class,
            'functional_fire_hazard_class'      => $request->functional_fire_hazard_class,
            'building_responsibility_level'     => $request->building_responsibility_level,
        ]);

        return response()->json($commonData);
    }

    public function updateCommonData(Request $request, $id)
    {
        CommonData::where('id', $id)->update([
            'order_id'                          => $request->order_id,
            'building_purpose'                  => $request->building_purpose,
            'block_size'                        => $request->block_size,
            'building_configuration'            => $request->building_configuration,
            'floor_count'                       => $request->floor_count,
            'block_in_one_row_count'            => $request->block_in_one_row_count,
            'overlap_type'                      => $request->overlap_type,
            'corridor_width'                    => $request->corridor_width,
            'clear_ceiling_height'              => $request->clear_ceiling_height,
            'climatic_region'                   => $request->climatic_region,
            'region_seismicity'                 => $request->region_seismicity,
            'climatic_zone'                     => $request->climatic_zone,
            'fire_resistance_degree'            => $request->fire_resistance_degree,
            'constructive_fire_hazard_class'    => $request->constructive_fire_hazard_class,
            'functional_fire_hazard_class'      => $request->functional_fire_hazard_class,
            'building_responsibility_level'     => $request->building_responsibility_level,
        ]);

        return response()->json('CommonData updated successfully!');
    }
}
