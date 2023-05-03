<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order\Mounting;
use Illuminate\Http\Request;

class MountingController extends Controller
{
    public function getMounting(int $orderId)
    {
        return response()->json(Mounting::where('order_id', $orderId)->first());
    }

    public function storeMounting(Request $request)
    {
        $mounting = Mounting::create([
            'order_id'                                  => $request->order_id,
            'from_moscow_distance'                      => $request->from_moscow_distance,
            'work_weather_condition'                    => $request->work_weather_condition,
            'tool_return'                               => $request->tool_return,
            'foundation'                                => $request->foundation,
            'crane_with_crane_operator'                 => $request->crane_with_crane_operator,
            'construction_debris'                       => $request->construction_debris,
            'platform_for_material'                     => $request->platform_for_material,
            'access_road'                               => $request->access_road,
            'electricity'                               => $request->electricity,
            'technical_water_and_toilet'                => $request->technical_water_and_toilet,
            'food_is_provided_by_customer'              => $request->food_is_provided_by_customer,
            'meals_within_walking_distance'             => $request->meals_within_walking_distance,
            'accommodation_provided_by_customer'        => $request->accommodation_provided_by_customer,
            'accommodation_within_walking_distance'     => $request->accommodation_within_walking_distance,
            'bath_and_laundry_service'                  => $request->bath_and_laundry_service,
            'limited_working_day'                       => $request->limited_working_day,
        ]);

        return response()->json($mounting);
    }

    public function updateMounting(Request $request, $id)
    {
        Mounting::where('id', $id)->update([
            'order_id'                                  => $request->order_id,
            'from_moscow_distance'                      => $request->from_moscow_distance,
            'work_weather_condition'                    => $request->work_weather_condition,
            'tool_return'                               => $request->tool_return,
            'foundation'                                => $request->foundation,
            'crane_with_crane_operator'                 => $request->crane_with_crane_operator,
            'construction_debris'                       => $request->construction_debris,
            'platform_for_material'                     => $request->platform_for_material,
            'access_road'                               => $request->access_road,
            'electricity'                               => $request->electricity,
            'technical_water_and_toilet'                => $request->technical_water_and_toilet,
            'food_is_provided_by_customer'              => $request->food_is_provided_by_customer,
            'meals_within_walking_distance'             => $request->meals_within_walking_distance,
            'accommodation_provided_by_customer'        => $request->accommodation_provided_by_customer,
            'accommodation_within_walking_distance'     => $request->accommodation_within_walking_distance,
            'bath_and_laundry_service'                  => $request->bath_and_laundry_service,
            'limited_working_day'                       => $request->limited_working_day,
        ]);

        return response()->json('Mounting updated successfully!');
    }
}
