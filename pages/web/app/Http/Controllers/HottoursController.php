<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HottoursController extends Controller
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
     *
     */

     public function savehottours(Request $request)
     {
 
         $addcategory = DB::table('hot_tours')->insert([
             'Trip_ID' => $request->Trip_ID,
             'packages_name' => $request->packages_name,
             'photo' => $request->photo,
             'packages_description' => $request->packages_description,
             'price' => $request->price,
         ]);
 
         return redirect('admin/viewhottours')->with('success', 'Category Added Successfully');
     }

    public function addhottours(){

            return view('admin.addhottours');

}

public function viewhottours(){


    $sql = "select * from  hot_tours";
    $hottours = DB::select(DB::raw($sql));

    return view('admin.viewhottours',compact('hottours'));
}

public function edit_hottours(){
    
    $sql = "select * from  hot_tours";
        $hottours = DB::select(DB::raw($sql));

        return view('admin.edit_hottours',compact('hottours'));

}


public function delete_hottours(){
    
    $sql = "select * from  hot_tours";
        $hottours = DB::select(DB::raw($sql));

    return view('admin.delete_hottours',compact('hottours'));

}


public function add_img_hottours(){
    
    $sql = "select * from  hot_tours";
        $hottours = DB::select(DB::raw($sql));

    return view('admin.add_img_hottours',compact('hottours'));

}
}
