<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard(){
        $booking = DB::table( 'popular_tours_booking' )->limit(10)->orderBy( 'id', 'Asc' )->get();
        
       
        return view('admin/dashboard', compact('booking'),);
            
}
public function dashboard1(){
   
    $bookings = DB::table( 'hot_tours_booking' )->limit(10)->orderBy( 'id', 'Asc' )->get();
    
    return view('admin/dashboard', compact('bookings'),);
        
}
public function dashboard2(){
    
    $selects = DB::table( 'popular_tours_booking' )->orderBy( 'id', 'Asc' )->get();
    return view('admin/dashboard2', compact('selects'),);
        
}

         
}