<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HottoursController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addhottours(){

            return view('admin.addhottours');

    }
	
    public function savehottours(Request $request)
    {

        $addcategory = DB::table('hot_tours')->insert([
            'Trip_ID' => $request->Trip_ID,
            'packages_name' => $request->packages_name,
            'packages_description' => $request->packages_description,
            'price' => $request->price,
        ]);
        $last_insert_id = DB::getPdo()->lastInsertId();
        $photo ="";
        if($request->photo != null){
        $photo = $last_insert_id.'.'.$request->file('photo')->extension();
        $filepath = public_path('assets'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR);
            move_uploaded_file($_FILES['photo']['tmp_name'], $filepath.$photo);
        }
        $addcategory = DB::table('hot_tours')->where('id',$last_insert_id)->update([
            'photo' => $photo, ]);
        return redirect('admin/viewhottours')->with('success', 'Category Added Successfully');
    }
	
	

public function viewhottours(){
    
    $sql = "select * from hot_tours";
        $hottours = DB::select(DB::raw($sql));

    return view('admin.viewhottours',compact('hottours'));

}

public function edit_hottours($id){
    
    $sql = "select * from hot_tours where id=$id";
        $hottours = DB::select(DB::raw($sql));

    return view('admin.edit_hottours',compact('hottours'));

}

public function updatehottours(Request $request){

    $editcategory = DB::table('hot_tours')->where('id',$request->tourid)->update([
        'Trip_ID' => $request->Trip_ID,
        'packages_name' => $request->packages_name,
        'packages_description' => $request->packages_description,
        'price' => $request->price,
        'status' => $request->status,
    ]);
                $photo ="";
                if($request->photo != null){
                $photo = $request->tourid.'.'.$request->file('photo')->extension(); 
                $filepath = public_path('assets'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR);
                move_uploaded_file($_FILES['photo']['tmp_name'], $filepath.$photo);
                $editcategory = DB::table('hot_tours')->where('id',$request->id)->update([
                    'photo' => $photo, ]);
}
return redirect('admin/viewhottours')->with('success', 'Category Added Successfully');

}


/* public function delete_populartours(){
    
    $sql = "select * from popular_tours";
        $populartours = DB::select(DB::raw($sql));

    return view('admin.delete_populartours',compact('populartours'));

} */
public function delete_hottours($id){
    
    $delete_hottours = DB::table('hot_tours')->where('id', $id)->delete();
    return redirect('admin/viewhottours')->with('success', 'hottours Deleted Successfully');

}


public function add_img_hottours(){
    
    $sql = "select * from hot_tours";
        $hottours = DB::select(DB::raw($sql));

    return view('admin.add_img_hottours',compact('hottours'));

}
}
