<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;

class UsersController extends Controller
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
    public function add_users(){

            return view('admin.add_users');

}

public function view_users(){

     
    $sql = "select * from users";
        $users = DB::select(DB::raw($sql));

    return view('admin.view_users',compact('users'));

    return view('admin.view_users');

}


public function saveusers(Request $request)
{

    $addcategory = DB::table('users')->insert([
        'name' => $request->name,
        'email' => $request->email ,
        'password' => Hash::Make($request->password),
        'phone' => $request->phone,
        'gender' => $request->gender,
        'city' => $request->city,
    ]);
    $last_insert_id = DB::getPdo()->lastInsertId();
    $image ="";
    if($request->image != null){
    $image = $last_insert_id.'.'.$request->file('image')->extension();
    $filepath = public_path('assetss'.DIRECTORY_SEPARATOR.'photo'.DIRECTORY_SEPARATOR);
        move_uploaded_file($_FILES['image']['tmp_name'], $filepath.$image);
    }
    $addcategory = DB::table('users')->where('id',$last_insert_id)->update([
        'image' => $image,]);

    return redirect('admin/view_users')->with('success', 'Category Added Successfully');
}
}
