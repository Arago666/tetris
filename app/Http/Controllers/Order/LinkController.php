<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
//    public function __construct()
//    {
//        return $this->middleware('auth:api');
//    }

    public function getLink(int $id)
    {
        return response()->json(Link::where('order_id', $id)->first());
    }

    public function storeLink(Request $request)
    {
        $linkData = Link::create([
            'order_id'                  => $request->order_id,
            'plan'                      => $request->plan,
            'data_sheet'                => $request->data_sheet,
            'risk_assessment_table'     => $request->risk_assessment_table,
        ]);

        return response()->json($linkData);
    }

    public function updateLink(Request $request, $id)
    {
        Link::where('id', $id)->update([
            'order_id'                  => $request->order_id,
            'plan'                      => $request->plan,
            'data_sheet'                => $request->data_sheet,
            'risk_assessment_table'     => $request->risk_assessment_table,
        ]);

        return response()->json('Link updated successfully!');
    }
}
