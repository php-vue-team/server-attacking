<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use Log;

class registerController extends Controller
{
    public function completeOrder(Request $request)
    {
        $order = new Order;
        $order->user_name = $request->name;
        $order->user_email = $request->email;
        $order->user_address = $request->address;
        $order->user_phone = $request->phone;
        $order->save();
        $order = order::latest('id')->first();
        return view('order_detail')->with('order', $order);
    }
}
