<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;
use App\Product;
use App\MyItem;
class CartController extends Controller
{
    public function addItem($id)
    {
        
        if(session()->has('session_id')){
            $mysession = session()->get('session_id');
        }else{
            $value = session()->put('session_id',uniqid());
            $mysession = session()->get('session_id');
        }
        
        // $request->session()->forget('session_id');
        
        // return $mysession;
        
        $product = Product::find($id);
        if($product->discunt_price > 0){
            $price = $product->discunt_price;
        }else{
            $price = $product->price;
        }
        
        $cart_item = Cart::add($id,$product->name,1,$price);
                
         MyItem::create([
             'row_id' => $cart_item->rowId,
             'product_id' => $product->id,
             'product_name' => $product->name,
             'product_img' => $product->product_photo,
             'product_price' => $price,
             'product_qty' => 1,
             'is_family' => $product->family,
             'session' => $mysession,
             'total_price' => $price*1
         ]);
        
        return redirect()->back();
        
        
    }
    
    public function myItems()
    {
        $cartItems = Cart::content();
        return view('front.pages.my-items',compact('cartItems'));
    }
    
    public function updateItem(Request $request,$rowId)
    {
        $myitem = Cart::update($rowId, $request->qty); 
        MyItem::where('row_id',$rowId)->update(['product_qty'=>$request->qty,'total_price' => $myitem->subtotal]);
        
        return redirect()->back();
    }

    
    public function itemDelete($rowId)
    {
        Cart::remove($rowId);
        $product = MyItem::where('row_id',$rowId)->first();
        
        $product->delete();
        
        return redirect()->back();
    }

    
}
