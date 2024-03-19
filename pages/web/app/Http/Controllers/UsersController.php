<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        'image' => $request->image,
        'password' => $request->password,
        'phone' => $request->phone,
        'gender' => $request->gender,
        'image' => $request->image,
        'city' => $request->city,
    
    ]);

    return redirect('admin/view_users')->with('success', 'Category Added Successfully');
}
}
