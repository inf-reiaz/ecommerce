<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class AdminOrder extends Controller
{
    public function index()
    {
        
        $orders = Order::orderBy('created_at','DESC')->get();
        // $orders = Order::where('isDelivered',1)->sum('total');
        // return $orders;
        return view('admin.pages.order.index',compact('orders'));
    }
    
    
    
    public function search(Request $request)
    {
    
        $item = $request->item;
        
        $orders = Order::where("number","LIKE","%{$item}%")->orWhere("postal_code","LIKE","%{$item}%")->orWhere("city","LIKE","%{$item}%")->orWhere("email","LIKE","%{$item}%")->orWhere("first_name","LIKE","%{$item}%")->get();
        
        return view('admin.pages.order.searchindex',compact('orders'));
    }



    
    public function searchByDate(Request $request)
    {
    
        $date1 = $request->date1;
        $date2 = $request->date2;
        
        $orders = Order::Where('created_at',$date1)->orWhere('created_at',$date2)->orWhereBetween('created_at',[$date1,$date2])->get();
                        
        return view('admin.pages.order.searchindex',compact('orders'));
        
    }

    
    
    public function Details($id)
    {
        $order = Order::find($id);
        //  return $order;
        return view('admin.pages.order.details',compact('order'));
    }
    
    public function Delivered($id)
    {
        
        $order = Order::find($id)->update(['isDelivered' => 1]);
        
        return back();
        
        
    }
    
}
