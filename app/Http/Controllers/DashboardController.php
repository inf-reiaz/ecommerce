<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Facades\Charts;
use Auth;
use App\User;
use App\Role;
use App\Product;
use App\Order;
use App\Subscriber;
use Alert;
use DB;
class DashboardController extends Controller
{
    public function getDashboard()
    {
        $s = Order::where('isDelivered',1)->sum('total');
        // return $s;
        $percentage = 20;

        $profit = ($percentage / 100) * $s;

        // return $new_width;

        $sum = Order::sum('orders.total');
                            
        $user = User::all()->count();
        
        $all_sub = Subscriber::all()->count();
        
        $role = Role::where('name','=','admin')->count();
        $subscriber = Role::where('name','=','subscriber')->count();
        
        $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get();
        $users = Charts::database($users, 'bar', 'highcharts')

			      ->title("Monthly new Register Users")

			      ->elementLabel("Total Users")

			      ->dimensions(1100, 500)

			      ->responsive(false)

			      ->groupByMonth(date('Y'), true);
			      
			      
        $products = Product::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get(); 
        $products = Charts::database($products, 'pie', 'highcharts')

			      ->title("Monthly  Product")

			      ->elementLabel("Total Products")

			      ->dimensions(1100, 500)

			      ->responsive(false)

			      ->groupByMonth(date('Y'), true);
			      
        $orders = Order::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get(); 
        $orders = Charts::database($orders, 'line', 'highcharts')

			      ->title("Monthly  Orders")

			      ->elementLabel("Total Orders")

			      ->dimensions(1100, 500)

			      ->responsive(false)

			      ->groupByMonth(date('Y'), true);
			      
        $subscribers = Subscriber::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))->get(); 
        $subscribers = Charts::database($subscribers, 'bar', 'highcharts')

			      ->title("Monthly  Subscribers")

			      ->elementLabel("Total Subscribers")

			      ->dimensions(1100, 500)

			      ->responsive(false)

			      ->groupByMonth(date('Y'), true);
			      
			      
        return view('admin.pages.dashboard',compact('user','role','subscriber','users','products','orders','subscribers','all_sub','profit'));
    }
    
    
    public function subscriber()
    {
        $sub = Subscriber::all();
        return view('admin.pages.sub',compact('sub'));
        
    }

    
    
}
