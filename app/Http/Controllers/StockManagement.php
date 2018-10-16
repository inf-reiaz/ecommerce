<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class StockManagement extends Controller
{
    protected $limit = 30;
    public function index()
    {
        
        $products = Product::latest()
                    ->simplePaginate($this->limit);
                    
        return view('admin.pages.strocks.index',compact('products'));
    }
    
    public function search(Request $request)
    {
    
        $item = $request->item;
        
        $products = Product::where("description","LIKE","%{$item}%")->orWhere("name","LIKE","%{$item}%")->orWhere("price","LIKE","%{$item}%")->orWhere("discunt_price","LIKE","%{$item}%")->get();
        
        
        return view('admin.pages.strocks.search',compact('products'));
        
    }
    
    
    
    public function searchByDate(Request $request)
    {
    
        $date1 = $request->date1;
        $date2 = $request->date2;
        
        $products = Product::Where('created_at',$date1)->orWhere('created_at',$date2)->orWhereBetween('created_at',[$date1,$date2])->get();
                        
        
        return view('admin.pages.strocks.search',compact('products'));

        
    }

    
    
    public function addProductNumber($id)
    {
        $product = Product::find($id);
        
        return view('admin.pages.strocks.quantity_update',compact('product'));
        
        
    }
    
    public function update(Request $request,$id)
    {
        
        $product = Product::findOrFail($id);
        
        $old_qty = $product->quantity;            
                
        $new_qty = $request->quantity;
        
        $total = $old_qty + $new_qty;
        
        $product->update(['quantity' => $total]);
                
        if($product){
            return redirect()->action('StockManagement@index');
        }else{
            
            return redirect()->back();
        }
        
    }
    
}
