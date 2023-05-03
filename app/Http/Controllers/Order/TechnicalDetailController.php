<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order\TechnicalDetail;
use Illuminate\Http\Request;

class TechnicalDetailController extends Controller
{
    public function getTechnicalDetail(int $orderId)
    {
        return response()->json(TechnicalDetail::where('order_id', $orderId)->first());
    }

    public function storeTechnicalDetail(Request $request)
    {
        $technicalDetail = TechnicalDetail::create([
            'order_id'                                      => $request->order_id,
            'building_perimeter'                            => $request->building_perimeter,
            'long_side_bc_joints_count'                     => $request->long_side_bc_joints_count,
            'short_side_bc_joints_count'                    => $request->short_side_bc_joints_count,
            'long_side_wet_zone_bc_joints_count'            => $request->long_side_wet_zone_bc_joints_count,
            'inside_bc_width_partition_count'               => $request->inside_bc_width_partition_count,
            'without_rack_corridor_partition_count'         => $request->without_rack_corridor_partition_count,
            'with_rack_corridor_partition_count'            => $request->with_rack_corridor_partition_count,
            'without_abutment_corridor_partition_count'     => $request->without_abutment_corridor_partition_count,
            'without_rack_exterior_corner_count'            => $request->without_rack_exterior_corner_count,
            'with_rack_exterior_corner_count'               => $request->with_rack_exterior_corner_count,
            'without_rack_interior_corner_count'            => $request->without_rack_interior_corner_count,
            'with_rack_interior_corner_count'               => $request->with_rack_interior_corner_count,
            'wall_adjacent_column_count'                    => $request->wall_adjacent_column_count,
            'freestanding_adjacent_column_count'            => $request->freestanding_adjacent_column_count,
            'finishing_perimeter'                           => $request->finishing_perimeter,
            'wet_room_without_razuklonki_area'              => $request->wet_room_without_razuklonki_area,
            'wet_room_with_razuklonki_area'                 => $request->wet_room_with_razuklonki_area,
            'wet_room_perimeter'                            => $request->wet_room_perimeter,
            'shower_tray_without_partition'                 => $request->shower_tray_without_partition,
            'shower_tray_with_one_partition'                => $request->shower_tray_with_one_partition,
            'shower_tray_with_two_partition'                => $request->shower_tray_with_two_partition,
            'shower_tray_with_three_partition'              => $request->shower_tray_with_three_partition,
            'flight_delivery_count'                         => $request->flight_delivery_count,
            'supplier_to_object_distance'                   => $request->supplier_to_object_distance,
            'general_construction_worker_count'             => $request->general_construction_worker_count,
            'working_electricians_count'                    => $request->working_electricians_count,
            'working_plumbers_count'                        => $request->working_plumbers_count,
        ]);

        return response()->json($technicalDetail);
    }

    public function updateTechnicalDetail(Request $request, $id)
    {
        TechnicalDetail::where('id', $id)->update([
            'order_id'                                      => $request->order_id,
            'building_perimeter'                            => $request->building_perimeter,
            'long_side_bc_joints_count'                     => $request->long_side_bc_joints_count,
            'short_side_bc_joints_count'                    => $request->short_side_bc_joints_count,
            'long_side_wet_zone_bc_joints_count'            => $request->long_side_wet_zone_bc_joints_count,
            'inside_bc_width_partition_count'               => $request->inside_bc_width_partition_count,
            'without_rack_corridor_partition_count'         => $request->without_rack_corridor_partition_count,
            'with_rack_corridor_partition_count'            => $request->with_rack_corridor_partition_count,
            'without_abutment_corridor_partition_count'     => $request->without_abutment_corridor_partition_count,
            'without_rack_exterior_corner_count'            => $request->without_rack_exterior_corner_count,
            'with_rack_exterior_corner_count'               => $request->with_rack_exterior_corner_count,
            'without_rack_interior_corner_count'            => $request->without_rack_interior_corner_count,
            'with_rack_interior_corner_count'               => $request->with_rack_interior_corner_count,
            'wall_adjacent_column_count'                    => $request->wall_adjacent_column_count,
            'freestanding_adjacent_column_count'            => $request->freestanding_adjacent_column_count,
            'finishing_perimeter'                           => $request->finishing_perimeter,
            'wet_room_without_razuklonki_area'              => $request->wet_room_without_razuklonki_area,
            'wet_room_with_razuklonki_area'                 => $request->wet_room_with_razuklonki_area,
            'wet_room_perimeter'                            => $request->wet_room_perimeter,
            'shower_tray_without_partition'                 => $request->shower_tray_without_partition,
            'shower_tray_with_one_partition'                => $request->shower_tray_with_one_partition,
            'shower_tray_with_two_partition'                => $request->shower_tray_with_two_partition,
            'shower_tray_with_three_partition'              => $request->shower_tray_with_three_partition,
            'flight_delivery_count'                         => $request->flight_delivery_count,
            'supplier_to_object_distance'                   => $request->supplier_to_object_distance,
            'general_construction_worker_count'             => $request->general_construction_worker_count,
            'working_electricians_count'                    => $request->working_electricians_count,
            'working_plumbers_count'                        => $request->working_plumbers_count,
        ]);

        return response()->json('TechnicalDetail updated successfully!');
    }
}
