<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Populartourscontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addpopulartours(){

            return view('admin.addpopulartours');

    }
	
    public function savepopulartours(Request $request)
    {

        $addcategory = DB::table('popular_tours')->insert([
            'Trip_ID' => $request->Trip_ID,
            'packages_name' => $request->packages_name,
            'packages_description' => $request->packages_description,
            'price' => $request->price,
        ]);
        $last_insert_id = DB::getPdo()->lastInsertId();
        $photo ="";
        if($request->photo != null){
        $photo = $last_insert_id.'.'.$request->file('photo')->extension();
        $filepath = public_path('assets'.DIRECTORY_SEPARATOR.'photos'.DIRECTORY_SEPARATOR);
            move_uploaded_file($_FILES['photo']['tmp_name'], $filepath.$photo);
        }
        $addcategory = DB::table('popular_tours')->update([
            'photo'                  => $photo,
            ]);
        return redirect('admin/viewpopulartours')->with('success', 'Category Added Successfully');
    }
	
	

public function viewpopulartours(){
    
    $sql = "select * from popular_tours";
        $populartours = DB::select(DB::raw($sql));

    return view('admin.viewpopulartours',compact('populartours'));

}

public function edit_populartours(){
    
    $sql = "select * from popular_tours";
        $populartours = DB::select(DB::raw($sql));

    return view('admin.edit_populartours',compact('populartours'));

}


public function delete_populartours(){
    
    $sql = "select * from popular_tours";
        $populartours = DB::select(DB::raw($sql));

    return view('admin.delete_populartours',compact('populartours'));

}


public function add_img_populartours(){
    
    $sql = "select * from popular_tours";
        $populartours = DB::select(DB::raw($sql));

    return view('admin.add_img_populartours',compact('populartours'));

}
}
