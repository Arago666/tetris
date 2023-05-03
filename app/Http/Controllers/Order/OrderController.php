<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
//    public function __construct()
//    {
//        return $this->middleware('auth:api');
//    }

    public function index()
    {
        return view('order.order');
//        $this->authorize('tasks-read');

//        return response()->json(Task::latest()->with('sub_tasks')->get());
    }

    public function getOrders()
    {
//        $this->authorize('tasks-read');

        return response()->json(Order::latest()->get());
    }

    public function storeOrder(Request $request)
    {
//        $order = new Order();
        
//        $order->crm_number = $request->crm_number;
//        $order->product_type_number = $request->product_type_number;
//
//        $order->save();


        $order = Order::create([
            'name'                  => $request->name,
            'crm_number'            => $request->crm_number,
            'product_type_number'   => $request->product_type_number,
            'buildings_count'       => $request->buildings_count,
            'contract_number'       => $request->contract_number,
        ]);

        return response()->json($order->id);
    }

    public function updateOrder(Request $request, $orderId)
    {
//        $order = Order::findOrFail($orderId);
//
//        $order->name = $request->name;
//        $order->crm_number = $request->crm_number;
//        $order->product_type_number = $request->product_type_number;
//
//        $order->save();

        $order = Order::where('id', $orderId)->update([
            'name'                  => $request->name,
            'crm_number'            => $request->crm_number,
            'product_type_number'   => $request->product_type_number,
            'buildings_count'       => $request->buildings_count,
            'contract_number'       => $request->contract_number,
        ]);

        return response()->json($order);
    }
}
