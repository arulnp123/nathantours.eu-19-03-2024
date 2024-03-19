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
        foreach ( $request->addmore as $key => $value ) {
            $addcustomer = DB::table( 'populartours_dates' )->insert( [
                'tour_id' => $last_insert_id,
                'tour_date' => $value[ 'tourdate' ],
            ] );
        }
        $photo ="";
        if($request->photo != null){
        $photo = $last_insert_id.'.'.$request->file('photo')->extension();
        $filepath = public_path('assets'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR);
            move_uploaded_file($_FILES['photo']['tmp_name'], $filepath.$photo);
        }
        $addcategory = DB::table('popular_tours')->where('id',$last_insert_id)->update([
            'photo' => $photo, ]);
        return redirect('admin/viewpopulartours')->with('success', 'Category Added Successfully');
    }
	
	

public function viewpopulartours(){
    
    $sql = "select * from popular_tours";
        $populartours = DB::select(DB::raw($sql));

    return view('admin.viewpopulartours',compact('populartours'));

}

public function edit_populartours($id){
    
    $sql = "select * from popular_tours where id=$id";
        $populartours = DB::select(DB::raw($sql));
        $populartours = json_decode( json_encode( $populartours ), true );
        foreach ( $populartours as $key1 => $cus ) {
            $tour_id = $cus[ 'id' ];
            $tourdate = DB::table( 'populartours_dates' )->where( 'tour_id', '=', $tour_id )->get();

            $populartours[ $key1 ][ 'tourdate' ] = $tourdate;
        }
        $populartours = json_decode( json_encode( $populartours ) );
       // echo "<pre>";print_r($populartours);echo"</pre>";die;
    return view('admin.edit_populartours',compact('populartours'));

}

public function updatepopulartours(Request $request){

    $editcategory = DB::table('popular_tours')->where('id',$request->tourid)->update([
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
                $editcategory = DB::table('popular_tours')->where('id',$request->id)->update([
                    'photo' => $photo, ]);
}

$tour_id = $request->tourid;
$deletefamily = DB::table( 'populartours_dates' )->where( 'tour_id', $tour_id )->delete();
foreach ( $request->addmore as $key => $value ) {
    $addcustomer = DB::table( 'populartours_dates' )->insert( [
        'tour_id' => $tour_id,
        'tour_date' => $value[ 'tourdate' ],
    ] );
}
return redirect('admin/viewpopulartours')->with('success', 'Category Added Successfully');

}


/* public function delete_populartours(){
    
    $sql = "select * from popular_tours";
        $populartours = DB::select(DB::raw($sql));

    return view('admin.delete_populartours',compact('populartours'));

} */
public function delete_populartours($id){
    
    $delete_populartours = DB::table('popular_tours')->where('id', $id)->delete();
    return redirect('admin/viewpopulartours')->with('success', 'pulartours Deleted Successfully');

}


public function add_img_populartours(){
    
    $sql = "select * from popular_tours";
        $populartours = DB::select(DB::raw($sql));

    return view('admin.add_img_populartours',compact('populartours'));

}
}