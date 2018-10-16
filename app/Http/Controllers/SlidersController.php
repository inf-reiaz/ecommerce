<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    protected $limit = 30;
    
     
    public function index()
    {
        $sliders = Slider::latest()
                    ->simplePaginate($this->limit);
        
        return view('admin.pages.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Slider $slider)
    {
        return view('admin.pages.slider.create',compact('slider'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        // return $request->all();
        
      $this->validate($request, [
        'image'                 => 'required',
        'link'                 => 'required',
      ]);
      
      
     $data              = $request->all();
        
                    
        if($request->hasFile('image'))
        {
            if($request->file('image')->isValid())
            {
                $location   = public_path().'/front/images/slider/';
                if(!is_dir($location))
                {
                    mkdir($location, 0777, true);
                }
                
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('image')->getClientOriginalExtension();
                $image = new \App\Http\Controllers\SimpleImage($request->file('image'));
                // Size:lg
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                
                $data['image'] = '/public/front/images/slider/'.$image_lg;
            }
        }


        $slider = Slider::create($data);
    
        return redirect()->action('SlidersController@index')->with('success', 'New  Slider is Created successfully!');
     

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
        $slider = Slider::findOrFail($id);
        return view('admin.pages.slider.edit',compact('slider'));
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
        $slider = Slider::findOrFail($id);
        $oldimage = $slider->image;
        $this->validate($request, [
            'link'                      => 'required'
          ]);
          
          
        
        
        $data = $request->all();
      
        
                    
        if($request->hasFile('image'))
        {
            if($request->file('image')->isValid())
            {
                $location   = public_path().'/front/images/slider/';
                if(!is_dir($location))
                {
                    mkdir($location, 0777, true);
                }
                
                $image_lg  = date('Ymdhis').'_lg.'.$request->file('image')->getClientOriginalExtension();
                $image = new \App\Http\Controllers\SimpleImage($request->file('image'));
                // Size:lg
                $image->best_fit(1200,600);
                $image->save($location.$image_lg);
                
                $data['image'] = '/public/front/images/slider/'.$image_lg;
            }
        }else{
            $data['image'] = $oldimage;    
        }
          
        
        $updateproduct = Slider::findOrFail($id)->update($data); 
        
        return redirect()->action('SlidersController@index')->with('success', ' Slider is Updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->action('SlidersController@index')->withSuccess('Slider is Delete successfully!');
    }
}
