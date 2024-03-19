<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\booksendingEmail;
use Illuminate\Support\Facades\Mail;


class BooknowController extends Controller
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
    public function Book_now($id){
         $populartours = DB::table( 'popular_tours' )->where('id','=', $id)->where( 'status', '=', 'Active' )->limit(3)->orderBy( 'id', 'Asc' )->get();
         $hottours = DB::table( 'hot_tours' )->where('id','=', $id)->where( 'status', '=', 'Active' )->limit(2)->orderBy( 'id', 'Asc' )->get();
         $tourdates = DB::table( 'populartours_dates' )->where('tour_id','=', $id)->orderBy( 'id', 'Asc' )->get();
         
         
        return view( 'frontend/Book_now', compact('populartours', 'hottours', 'tourdates'));
   }
   
public function bookdatah( Request $request) {

DB::table( 'popular_tours_booking' )->insert ([

'packages_name'=> $request->packages_name,
'price'=>$request->price,
'name'=>$request->name,
'email'=>$request->email,
'confirm_email'=>$request->cemail,
'select_date'=>$request->select_date,
'phone'=>$request->phone,
'adult_over_12'=>$request->adults,
'kid_4_to_12_years'=>$request->years,
'kid_below_4'=>$request->kids,
'message'=>$request->message,
'created_at' =>  date( 'Y-m-d H:i:s'),

]);


 
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,

        );

        Mail::to('felinfs122@gmail.com')->send(new booksendingEmail($data));
        return back()->with('success', 'Thanks for contacting us!');
  

}

// public function send(Request $request)
// {
//     $this->validate($request, [
//     'name' => 'required',
//     'email' => 'required',
//     'cemail' => 'required',
//     'phone' => 'required',
//     'message' => 'required'
//     ]);

//     $data = array(
//         'name' => $request->name,
//         'email' => $request->email,
//         'cemail' => $request->cemail,
//         'phone' => $request->phone,
//         'message' => $request->message,

//     );

//     Mail::to('felinfs122@gmail.com')->send(new booksendingEmail($data));
//     return back()->with('success', 'Thanks for contacting us!');
// }



}
