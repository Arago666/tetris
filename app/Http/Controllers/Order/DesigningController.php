<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order\Designing;
use Illuminate\Http\Request;

class DesigningController extends Controller
{
    public function getDesigning(int $orderId)
    {
        return response()->json(Designing::where('order_id', $orderId)->first());
    }

    public function storeDesigning(Request $request)
    {
        $designing = Designing::create([
            'order_id'                              => $request->order_id,
            'architectural_solution'                => $request->architectural_solution,
            'constructive_solution'                 => $request->constructive_solution,
            'internal_power_electrical_equipment'   => $request->internal_power_electrical_equipment,
            'internal_water_supply_systems'         => $request->internal_water_supply_systems,
            'internal_heating_systems'              => $request->internal_heating_systems,
            'internal_ventilation_system'           => $request->internal_ventilation_system,
            'fire_alarm_system'                     => $request->fire_alarm_system,
            'structured_cabling_system'             => $request->structured_cabling_system,
            'lan_ip_telephony'                      => $request->lan_ip_telephony,
            'iptv_video_surveillance'               => $request->iptv_video_surveillance,
        ]);

        return response()->json($designing);
    }

    public function updateDesigning(Request $request, $id)
    {
        Designing::where('id', $id)->update([
            'order_id'                              => $request->order_id,
            'architectural_solution'                => $request->architectural_solution,
            'constructive_solution'                 => $request->constructive_solution,
            'internal_power_electrical_equipment'   => $request->internal_power_electrical_equipment,
            'internal_water_supply_systems'         => $request->internal_water_supply_systems,
            'internal_heating_systems'              => $request->internal_heating_systems,
            'internal_ventilation_system'           => $request->internal_ventilation_system,
            'fire_alarm_system'                     => $request->fire_alarm_system,
            'structured_cabling_system'             => $request->structured_cabling_system,
            'lan_ip_telephony'                      => $request->lan_ip_telephony,
            'iptv_video_surveillance'               => $request->iptv_video_surveillance,
        ]);

        return response()->json('Designing updated successfully!');
    }
}
