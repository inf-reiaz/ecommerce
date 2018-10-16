<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Gloudemans\Shoppingcart\Facades\Cart;
use DB;
use Auth;
use App\User;
use App\Product;
use App\Order;
use App\MyCart;
use App\MyItem;
class CheckOutController extends Controller
{
    public function getCheckOut()
    {           
       session()->put('checkout','CheckOut');
        if(Auth::user()){
            session()->forget('checkout');
            // return redirect()->action('CheckOutController@getInvoice');
            return view('front.pages.checkout');
        }else{
            return redirect()->action('PublicPagesController@getLogin');
        }
    }
    
    public function getCheckOutfinal()
    {
        
        if(Auth::user()){
            return view('front.pages.checkout');
        }else{
            return redirect()->action('PublicPagesController@getLogin');
        }
    }
    
    
    public function postOrders(Request $request)
    {        
        // return $request->all();
        
        // $this->validate($request, array(
        //     'user_id'      =>  'required',
        //     'isDelivered'     =>  'required',
        //     'first_name'     =>  'required',
        //     'last_name'     =>  'required',
        //     'company'     =>  'required',
        //     'email'     =>  'required',
        //     'address'     =>  'required',
        //     'city'     =>  'required',
        //     'postal_code'     =>  'required',
        //     'number'     =>  'required',
        //     'radios'     =>  'required',
        //     'cash_on_delivery'     =>  'required',
        //     'total'   =>  'required'
        //     ));
            
           $user = User::find(Auth::user()->id);
           
           $update_user = $user->update(['address' => $request->address]);
           
           if($request->other_address){
               $other_address = $request->other_address;
           }else{
               $other_address = '#';
           }
           
            $order = new Order();
            $order->user_id = $request->user_id;
            $order->isDelivered = $request->isDelivered;
            $order->first_name = $request->first_name;
            $order->last_name = ' ';
            $order->company = $request->company;
            $order->email = $request->email;
            $order->address = $request->address;
            $order->other_address = $other_address;
            $order->city = $request->city;
            $order->postal_code = 1231;
            $order->number = $request->number;
            $order->radios = $request->radios;
            $order->cash_on_delivery = $request->cash_on_delivery;
            $order->total = $request->total;
            $order->save();
            $order_id = $order->id;
           
           
            $cartItems = Cart::content();
            
            
            foreach ($cartItems as $cartItem){
                $product = Product::find($cartItem->id);
                $qty = $cartItem->qty;
                $old_out_item = $product->out_item;
                $total_qta = $old_out_item + $qty;
                $product->update(['out_item' => $total_qta]);
                $order->orderItems()->attach($cartItem->id,[
                    'qty'=>$cartItem->qty,
                    'total'=>$cartItem->qty*$cartItem->price
                ]);
            }
            
            $total_o = Cart::subtotal();
            $total = str_replace(",","",$total_o);
            Cart::destroy();
            // session()->forget('session_id');
        return redirect()->action('CheckOutController@getInvoice',$order_id);
        
    }
    
    
    public function getInvoice($id)
    {
        
        $order = Order::find($id);
        
        $mysession = session()->get('session_id');
        
        // return $mysession;

        $mytotal = MyItem::where('session',$mysession)->sum('total_price'); 
        $family = MyItem::where('session',$mysession)->where('is_family','family')->sum('total_price'); 
        
        if($family > 999){
            $price = $mytotal - $family*10/100;
        }else{
            $price= $mytotal;
        }
        
        // return $price;
        
        
        $final_total = MyItem::where('session',$mysession)->sum('total_price'); 
        $my_items = MyItem::where('session',$mysession)->get();
        
        // return $my_items;
        
            Cart::destroy();
            session()->forget('session_id');
        return view('front.pages.invoice',compact('family','my_items','price','order'));
    }
    
    public function getOrderComplete()
    {
        return view('front.pages.thanks');
    }
}


