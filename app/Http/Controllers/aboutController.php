<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class aboutController extends Controller
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
    public function about(){
         $populartours = DB::table( 'popular_tours' )->where( 'status', '=', 'Active' )->limit(3)->orderBy( 'id', 'Asc' )->get();
         $hottours = DB::table( 'hot_tours' )->where( 'status', '=', 'Active' )->limit(2)->orderBy( 'id', 'Asc' )->get();
         

        return view( 'frontend/about', compact('populartours', 'hottours'));
   }
   
}
