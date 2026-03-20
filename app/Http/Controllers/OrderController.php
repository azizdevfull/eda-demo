<?php

namespace App\Http\Controllers;

use App\Events\OrderCreated;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = Order::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
        ]);

        event(new OrderCreated($order));

        return response()->json(['status' => 'ok']);
    }
}
