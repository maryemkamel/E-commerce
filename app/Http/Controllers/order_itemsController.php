<?php

namespace App\Http\Controllers;
use App\Models\order_items;
use App\Models\order;
use Illuminate\Http\Request;
use App\Http\Requests\Storeorder_itemRequest;
use App\Http\Requests\Updateorder_itemRequest;

class order_itemsController extends Controller
{
    //
    public function index()
    {
        //
        return view('pages.orders')->with([
            "order_items" => order_items::latest()->paginate(5)
           
        ]);

         
    }
    public function update(Request $request, Order_items $order_item)
    {
        //
        $order_item->update([
            "delivered" => 1]);
        return redirect()->back()->withSuccess("Order updated");
    }
    public function destroy(Order_items $order_item)
    {
        //
        $order_item->delete();
        return redirect()->back()->withSuccess("Order deleted");
    }
    public function show($id)
    {
        //
        $order=order::where('orderitem_id',$id)->get();
        $orderitem=order_items::where('id',$id)->first();
        return view("orderitems",compact('order','orderitem'));
      
    }
   
}
