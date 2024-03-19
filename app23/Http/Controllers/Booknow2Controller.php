<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Booknow2Controller extends Controller
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
    public function Book_now2($id){
         $populartours = DB::table( 'popular_tours' )->where('id','=', $id)->where( 'status', '=', 'Active' )->limit(3)->orderBy( 'id', 'Asc' )->get();
         $hottours = DB::table( 'hot_tours' )->where('id','=', $id)->where( 'status', '=', 'Active' )->limit(2)->orderBy( 'id', 'Asc' )->get();
         

        return view( 'frontend/Book_now2', compact('populartours', 'hottours'));
   }
//    function sendhottours(Request $request)
//     {
 
//         $data = array(
//             'name' => $request->name,
//             'email' => $request->email,
//             'cemail' => $request->cemail,
//             'date' => $request->date,
//             'days' => $request->days,
//             'phone' => $request->phone,
//             'adults' => $request->adults,
//             'years' => $request->years,
//             'kids' => $request->kids,
//             'message' =>$request->message,
            
            

//         );

//         Mail::to('felinfs122@gmail.com')->send(new sendingEmail($data));
//         return back()->with('success', 'Thanks for contacting us!');
//     }
   

    public function bookdatap( Request $request) {

        DB::table( 'hot_tours_booking' )->insert ([
        
        'packages_name'=> $request->packages_name,
        'price'=>$request->price,
        'name'=>$request->name,
        'email'=>$request->email,
        'confirm_email'=>$request->cemail,
        'select_date'=>$request->date,
        'no_of_days'=>$request->days,
        'phone'=>$request->phone,
        'adult_over_12'=>$request->adults,
        'kid_4_to_12_years'=>$request->years,
        'kid_below_4'=>$request->kids,
        'message'=>$request->message,
        'created_at' =>  date( 'Y-m-d H:i:s'),
       
        
        ]);
        return redirect('/home')->with( 'Success' , 'Booking Data Added SuccessFully');
        
        }


}
