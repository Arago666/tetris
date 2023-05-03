<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function getDelivery(int $orderId)
    {
        return response()->json(Delivery::where('order_id', $orderId)->first());
    }

    public function storeDelivery(Request $request)
    {
        $delivery = Delivery::create([
            'order_id'                              => $request->order_id,
            'floor_panels_in_container_delivery'    => $request->floor_panels_in_container_delivery,
            'irrevocable_20ft_container_count'      => $request->irrevocable_20ft_container_count,
            'irrevocable_40ft_container_count'      => $request->irrevocable_40ft_container_count,
            'special_packaging'                     => $request->special_packaging,
            'from_kaluga_distance'                  => $request->from_kaluga_distance,
            'from_penza_distance'                   => $request->from_penza_distance,
            'delivery_from_factory'                 => $request->delivery_from_factory,
            'transshipment_point_count'             => $request->transshipment_point_count,
            'seasonality_dependence'                => $request->seasonality_dependence,
        ]);

        return response()->json($delivery);
    }

    public function updateDelivery(Request $request, $id)
    {
        Delivery::where('id', $id)->update([
            'order_id'                              => $request->order_id,
            'floor_panels_in_container_delivery'    => $request->floor_panels_in_container_delivery,
            'irrevocable_20ft_container_count'      => $request->irrevocable_20ft_container_count,
            'irrevocable_40ft_container_count'      => $request->irrevocable_40ft_container_count,
            'special_packaging'                     => $request->special_packaging,
            'from_kaluga_distance'                  => $request->from_kaluga_distance,
            'from_penza_distance'                   => $request->from_penza_distance,
            'delivery_from_factory'                 => $request->delivery_from_factory,
            'transshipment_point_count'             => $request->transshipment_point_count,
            'seasonality_dependence'                => $request->seasonality_dependence,
        ]);

        return response()->json('Delivery updated successfully!');
    }
}
