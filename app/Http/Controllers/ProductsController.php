<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Product;
class ProductsController extends Controller
{
     
    protected $limit = 30;
     
    public function index()
    {
        $products = Product::latest()->get();
        
        return view('admin.pages.products.index',compact('products'));
        
    }
    
    
    
    public function searchIndex(Request $request)
    {
    
        $item = $request->item;
        $products = Product::where("description","LIKE","%{$item}%")->orWhere("name","LIKE","%{$item}%")->orWhere("price","LIKE","%{$item}%")->orWhere("discunt_price","LIKE","%{$item}%")->get();
        
        return view('admin.pages.products.searchindex',compact('products'));
        
        
    }
    
    
    public function searchByDate(Request $request)
    {
    
        $date1 = $request->date1;
        $date2 = $request->date2;
        
        $products = Product::Where('created_at',$date1)->orWhere('created_at',$date2)->orWhereBetween('created_at',[$date1,$date2])->get();
                        
        return view('admin.pages.products.searchindex',compact('products'));

        
    }

    

    public function create(Product $product)
    {
        return view('admin.pages.products.create',compact('product'));
    }

    public function store(Request $request)
    {

      $this->validate($request, [
        'name'                      => 'required',
        'product_photo_input'       => 'required',
        'description'               => 'required',
        'price'                     => 'required',
        'discunt_price'             => 'required',
        'quantity'                  => 'required'
      ]);
      

// return $request->all();

        $product = $request->all();
        
        if($request->hasFile('product_photo_input'))
        {
            if($request->file('product_photo_input')->isValid())
            {
                
                /**
                 * SimpleImage can't make dir. It returns error if directory does not exist.
                 * Make directory (if it dows not exists) before putting file in it
                 */
                $location   = public_path().'/front/img/';
                if(!is_dir($location))
                {
                    
                    mkdir($location, 0777, true);
                                    
                }
                
                /**
                *
                * Prepare names for file at different sizes
                * 
                */
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('product_photo_input')->getClientOriginalExtension();
                
                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('product_photo_input'));
                
                
                // Size:lg
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                
                $product['product_photo'] = '/public/front/img/'.$image_lg;
                
            }
                        
        }
      
        
        $newProduct = Product::create($product);
        
        

        $newProduct->categories()->sync($request->categories);

        return redirect()->action('ProductsController@index')->withSuccess('Product added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view("admin.pages.products.edit", compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $oldproduct = Product::findOrFail($id);
        $this->validate($request, [
            'name'                      => 'required',
            'description'               => 'required',
            'price'                     => 'required',
            'discunt_price'             => 'required',
            'quantity'                  => 'required'
          ]);
          
          
        $product['product_photo'] = $oldproduct->product_photo;
        $product = $request->all();
        
        if($request->hasFile('product_photo_input'))
        {
            if($request->file('product_photo_input')->isValid())
            {
                
                /**
                 * SimpleImage can't make dir. It returns error if directory does not exist.
                 * Make directory (if it dows not exists) before putting file in it
                 */
                $location   = public_path().'/front/img/';
                if(!is_dir($location))
                {
                    
                    mkdir($location, 0777, true);
                                    
                }
                
                /**
                *
                * Prepare names for file at different sizes
                * 
                */
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('product_photo_input')->getClientOriginalExtension();
                
                // Instantiate SimpleImage class
                $image = new \App\Http\Controllers\SimpleImage($request->file('product_photo_input'));
                
                
                // Size:lg
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                
                $product['product_photo'] = '/public/front/img/'.$image_lg;
                
            }
                        
        }
      
          
        
        $updateproduct = Product::findOrFail($id)->update($product); 

        $oldproduct->categories()->sync($request->categories);
        
        return redirect()->action('ProductsController@index')->withSuccess('Product Update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->action('ProductsController@index')->withSuccess('Product Delete successfully!');
    }

    
}
