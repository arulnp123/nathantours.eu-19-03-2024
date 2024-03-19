<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendingEmail;

class contact_usController extends Controller
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
    public function contact_us(){
         $populartours = DB::table( 'popular_tours' )->where( 'status', '=', 'Active' )->limit(3)->orderBy( 'id', 'Asc' )->get();
         $hottours = DB::table( 'hot_tours' )->where( 'status', '=', 'Active' )->limit(2)->orderBy( 'id', 'Asc' )->get();
         

        return view( 'frontend/contact_us', compact('populartours', 'hottours'));
   }

   public function send(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'cemail' => 'required',
        'phone' => 'required',
        'message' => 'required'
        ]);

        $data = array(
            'name' => $request->name,
            'email' => $request->name,
            'cemail' => $request->name,
            'phone' => $request->name,
            'message' => $request->message,

        );

        Mail::to('felinfs122@gmail.com')->send(new sendingEmail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
   
}
