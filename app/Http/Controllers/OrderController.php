<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    
    public function orderslist(Request $request)
    {
        $orders = Order::latest()->paginate(10);
        return view('admin.order.orderlist', ['orders'=>$orders, 'page'=>$request->page??1]);
    }

    public function createOrder(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'creator_id' => auth()->id(),
            'status' =>'OPEN',
        ];
        $order = Order::create($data);

        return [
            'status' => true
        ];   
    }

    public function details()
    {
        return view('admin.order.details');
    } 
    

}


