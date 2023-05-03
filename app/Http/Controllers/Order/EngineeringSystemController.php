<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order\EngineeringSystem;
use Illuminate\Http\Request;

class EngineeringSystemController extends Controller
{
    public function getEngineeringSystem(int $orderId)
    {
        return response()->json(EngineeringSystem::where('order_id', $orderId)->first());
    }

    public function storeEngineeringSystem(Request $request)
    {
        $engineeringSystem = EngineeringSystem::create([
            'order_id'                                      => $request->order_id,
            'plumbing'                                      => $request->plumbing,
            'hot_water_supply'                              => $request->hot_water_supply,
            'individual_water_heater'                       => $request->individual_water_heater,
            'common_water_heater'                           => $request->common_water_heater,
            'self_assembled_shower_cabin'                   => $request->self_assembled_shower_cabin,
            'purchased_assembled_shower_cabin'              => $request->purchased_assembled_shower_cabin,
            'washbasin'                                     => $request->washbasin,
            'toilet_bowl'                                   => $request->toilet_bowl,
            'urinal'                                        => $request->urinal,
            'release_strapping_under_building'              => $request->release_strapping_under_building,
            'pipe_insulation_under_building'                => $request->pipe_insulation_under_building,
            'electric'                                      => $request->electric,
            'building_power_supply_reliability_category'    => $request->building_power_supply_reliability_category,
            'socket'                                        => $request->socket,
            'switche'                                       => $request->switche,
            'fixture'                                       => $request->fixture,
            'heating'                                       => $request->heating,
            'heating_type'                                  => $request->heating_type,
            'heat_curtain'                                  => $request->heat_curtain,
            'heating_device_count'                          => $request->heating_device_count,
            'ventilation'                                   => $request->ventilation,
            'conditioner'                                   => $request->conditioner,
            'shared_bathroom_ventilation_type'              => $request->shared_bathroom_ventilation_type,
            'individual_bathroom_ventilation_type'          => $request->individual_bathroom_ventilation_type,
            'fire_system'                                   => $request->fire_system,
            'alarm_system'                                  => $request->alarm_system,
            'internal_water_supply'                         => $request->internal_water_supply,
        ]);

        return response()->json($engineeringSystem);
    }

    public function updateEngineeringSystem(Request $request, $id)
    {
        EngineeringSystem::where('id', $id)->update([
            'order_id'                                      => $request->order_id,
            'plumbing'                                      => $request->plumbing,
            'hot_water_supply'                              => $request->hot_water_supply,
            'individual_water_heater'                       => $request->individual_water_heater,
            'common_water_heater'                           => $request->common_water_heater,
            'self_assembled_shower_cabin'                   => $request->self_assembled_shower_cabin,
            'purchased_assembled_shower_cabin'              => $request->purchased_assembled_shower_cabin,
            'washbasin'                                     => $request->washbasin,
            'toilet_bowl'                                   => $request->toilet_bowl,
            'urinal'                                        => $request->urinal,
            'release_strapping_under_building'              => $request->release_strapping_under_building,
            'pipe_insulation_under_building'                => $request->pipe_insulation_under_building,
            'electric'                                      => $request->electric,
            'building_power_supply_reliability_category'    => $request->building_power_supply_reliability_category,
            'socket'                                        => $request->socket,
            'switche'                                       => $request->switche,
            'fixture'                                       => $request->fixture,
            'heating'                                       => $request->heating,
            'heating_type'                                  => $request->heating_type,
            'heat_curtain'                                  => $request->heat_curtain,
            'heating_device_count'                          => $request->heating_device_count,
            'ventilation'                                   => $request->ventilation,
            'conditioner'                                   => $request->conditioner,
            'shared_bathroom_ventilation_type'              => $request->shared_bathroom_ventilation_type,
            'individual_bathroom_ventilation_type'          => $request->individual_bathroom_ventilation_type,
            'fire_system'                                   => $request->fire_system,
            'alarm_system'                                  => $request->alarm_system,
            'internal_water_supply'                         => $request->internal_water_supply,
        ]);

        return response()->json('EngineeringSystem updated successfully!');
    }
}
