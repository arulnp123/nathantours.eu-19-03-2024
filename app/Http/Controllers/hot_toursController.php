<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class hot_toursController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function hot_tours(){
         $populartours = DB::table( 'popular_tours' )->where( 'status', '=', 'Active' )->limit(3)->orderBy( 'id', 'Asc' )->get();
         $hottours = DB::table( 'hot_tours' )->where( 'status', '=', 'Active' )->orderBy( 'id', 'Asc' )->get();
         

        return view( 'frontend/hot_tours', compact('populartours', 'hottours'));
   }
   
}
