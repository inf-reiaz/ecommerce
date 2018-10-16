<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyCart;
use App\Order;
use App\Product;
use App\Category;
use App\Slider;
use App\User;
use App\Subscriber;
use App\Http\Controllers\Mails;
use Auth;
use Mail;
use DB;
class PublicPagesController extends Controller
{
    
    public function demo()
    {

        return view('front.demo');
        
        
    }
    
    public function getIndex()
    {

        $myoffers = Category::find(1)->products()->take(4)->get();
        // return $offers->count();
        $pre_Orders = Category::find(2)->products()->take(4)->get();
        $family_combos = Category::find(3)->products()->take(4)->get();
        $dry_foods = Category::find(4)->products()->take(4)->get();
        $vegetables = Category::find(5)->products()->take(4)->get();
        $honeys = Category::find(6)->products()->take(4)->get();
        $dairys = Category::find(7)->products()->take(4)->get();
        $ingredients = Category::find(8)->products()->take(4)->get();
        $fishes = Category::find(9)->products()->take(4)->get();
        $groceryes = Category::find(10)->products()->take(4)->get();
        $s_sruits = Category::find(11)->products()->take(4)->get();
		
		$first_sliders = Slider::latest()->where('slider_position','=',1)->take(3)->get();
		$secend_sliders = Slider::latest()->where('slider_position','=',2)->take(3)->get();
		
        return view('front.pages.index',compact('myoffers','pre_Orders','family_combos','dry_foods','vegetables','honeys','dairys','ingredients','fishes','groceryes','s_sruits','first_sliders','secend_sliders'));
        
    }
    
    public function getProducts()
    {
        $products = Product::latest()->take(4)->get();
        
        return view('front.pages.products',compact('products'));
    }
    
    public function getPreorder()
    {
        $preordes = Category::find(2)->products()->take(8)->get();
        return view('front.pages.preorder',compact('preordes'));
        
    }
    
    public function getOffers()
    {
        $preordes = Category::find(1)->products()->take(8)->get();
        return view('front.pages.offres',compact('preordes'));
        
    }
    
    
    public function getFamilyCombo()
    {
        
        $preordes = Category::find(3)->products()->take(8)->get();
        return view('front.pages.family-combo',compact('preordes'));
        
    }
    
    public function getSearch(Request $request)
    {
        $item = $request->item;
        
        $products = Product::where("description","LIKE","%{$item}%")->orWhere("name","LIKE","%{$item}%")->get();
        
        return view('front.pages.search',compact('products'));
        
    }
    
    public function postSub(Request $request)
    {
        
        $sub = Subscriber::create($request->all());
        
        return back();
        
    }
    
    public function getCategory($slug)
    {
        $category = Category::where('slug','=',$slug)->first();
        
        $ctg_name = $category->name;
        
		$preordes = $category->products()->latest()->take(8)->get();
		
        return view('front.pages.category_product',compact('preordes','ctg_name'));
        
    }
    
    public function getAboutUs()
    {
        return view('front.pages.about-us');
        
    }
    
    public function getContactUs()
    {
        return view('front.pages.contact-us');
    }
    
    public function getFaq()
    {
        return view('front.pages.faq');
    }
    
    public function getSingleProduct($id)
    {
        $product = Product::find($id);
        $related = Product::latest()->take(10)->get();
        return view('front.pages.single',compact('product','related'));
        
    }
    
    
    public function getCategoryProduct()
    {
        $ctg_name = 'Product Category';
        return view('front.pages.category_product',compact('ctg_name'));
    }
    
    
    // user login 
    
    public function getLogin()
    {
        return view('front.pages.user.login');
        
    }
    
    public function postLogin(Request $request)
    {
        
        $this->validate($request, [
            'user_email'                   => 'required|email',
            'user_password'                => 'required|min:4'
          ]);
          
        if(Auth::attempt(['email'=>$request->input('user_email'),'password'=>$request->input('user_password')]))
        {
            if(session()->has('checkout'))
            {
                session()->forget('checkout');
                return redirect()->action('CheckOutController@getCheckOut');
                
            }else{
                return redirect()->action('PublicPagesController@getIndex');
            }
            
        } else{
            return back()->withErrors('authentication failed')->withInput();
        }

    }
    
    
    
    
    private function sendEmail($user_data){
        Mail::send('front.confirmation',['user'=>$user_data],function($m) use ($user_data){
            $m->to($user_data->email);
            $m->subject('Account Confirmation');
        });
    }
    
    
    public function postReg(Request $request)
    {
        
        
        $this->validate($request, [
            'firstname'              => 'required',
            'email'                   => 'required|email|unique:users',
            'password'                => 'required|min:4',
            'contact'                => 'required'
          ]);
        
        $user_data              = $request->all();
        $user_data = User::create($user_data);
        $this->sendEmail($user_data);
        
        if($user_data)
        {
            
            return redirect(action('PublicPagesController@getLogin'))->withSuccess('Congrates! Signup has been sucessful. Please login.');
                
            
        } else{
            
            return back()->withErrors('Failed to signup. Please check the required data.')->withInput();
            
        }
        

    }
    
    
    public function forgotPassword()
    {
        return view('front.pages.user.forget_password');
    }

    public function postForgotPassword(Request $request, Mails $mail)
    {
        
        $email  = $request->input('recovery_email');
        
        $user = \App\User::where('email',$email)->first();
        
        if($user)
        {
            $pass = rand(10000,20000).date('Y').rand(10000,20000);
            $new_password = $pass;
            
            $user->password = $new_password;
            
            $user->save();
            
            $mail->forgotPassword($user->id, $new_password);
            
            return redirect()->action('PublicPagesController@getLogin')->withSuccess('A new password has been sent to your email address.');
        
        } else{
            
            return redirect()->back()->withErrors('Sorry! User could not be found in database.');
            
        }
        
        
        
        
    }
    
    
    public function logout()
    {
        
        Auth::logout();
        
        return redirect()->action('PublicPagesController@getIndex');
    }
    
    public function getProfile()
    {
        return view('front.pages.user.account');
    }
    
    
    public function getUserAccount()
    {
        return view('front.pages.user.account');
    }
    
    public function getMyAccount()
    {
        return view('front.pages.user.my_account');
    }
    
    
    public function getUserAccountEdit($id)
    {
        $user = User::find($id);
        
        return view('front.pages.user.account_edit',compact('user'));
    }
    
    public function putUserAccountEdit(Request $request,$id)
    {
        
        // return $request->all();
        
        $this->validate($request, [
            'firstname'              => 'required',
            'email'                   => 'required|email',
            'contact'                => 'required'
          ]);
          
          
        $user_data = $request->all();
        
        // return $user_data;
        
        $current_user = User::findOrFail($id)->update($user_data);
        
        return redirect()->action('PublicPagesController@getUserAccount')->with('success', 'Your data was Updated successfully!');
        
    }
    
    public function getChangePassword()
    {
        return view('front.pages.user.change_password');
    }
    
    
    public function updatePassword(Request $request)
    {
        
            
        if($request->input('newpass') == $request->input('repeatpass'))
        {
            
            if( Auth::attempt([ 'email'=> auth()->user()->email, 'password'=>$request->input('oldpass') ]))
            {
                
                if(\DB::table('users')->where('id',auth()->user()->id)->update(['password'=>bcrypt($request->input('newpass'))]))
                {

                    return redirect()->action('PublicPagesController@getMyAccount')->withSuccess('Password updated successfully.');
                    
                } else{
                    
                    return back()->withErrors('Failed to update password.')->withInput();
                    
                }
                
            } else{
                
                return back()->withErrors('Current password did not match.');
                
            }
            
        } else{
                
            return back()->withErrors('New Password and Repeat Password did not match.');
            
        }
            
        
        
    }
    
    
    public function getOrderHistory()
    {		            
        $orders = MyCart::where('user_id',Auth::user()->id)->latest()->get();
        // return $orders;
        return view('front.pages.user.order_history',compact('orders'));
    }
    
    
}

