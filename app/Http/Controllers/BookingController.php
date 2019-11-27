<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\bookings;
use Validator;
use Alert;
use DB;


class BookingController extends Controller
{
    public function storedata(Request $request){
    	 $validator = Validator::make($request->all(), [
            'company' => 'required|string|max:50',
            'email' => 'required|string',
            'service'=>'required',
            'address'=>'required|string',
            
            'location'=>'required|max:100',
            ]);
    	 if ($validator->fails()) {

            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }
        if($request->input('service')=='mat ad'){
          return redirect('/');
         } 
        
          
       $booking=new bookings();
       $booking->id=mt_rand();
       $booking->company=$request->input('company');
       $booking->email=$request->input('email');
       $booking->address=$request->input('address');
       $booking->service=implode(',', $request->service);
       $booking->mat=$request->input('mat');
       $booking->graffiti_mats=$request->input('graffiti_mats');
       $booking->wifi_mats=$request->input('wifi_mats');
       $booking->wifi_restaurants=$request->input('wifi_restaurants');
       $booking->location=$request->input('location');
       $booking->save();
     alert()->success('We will be back to you!', 'Thanks for Booking!')->persistent('Close');
       return redirect('/');


    }
    public function getdetails(){
    	$booking=DB::table('bookings')->select('*')->get();
    	return view('home', compact('booking'));
    }
    public function edit($id){
      $bookings=bookings::find($id);
      
      return view('edit', compact('bookings'));
    }
    public function update(Request $request, $id){
    
       $booking=new bookings();
       $booking->company=$request->input('company');
       $booking->email=$request->input('email');
       $booking->address=$request->input('address');
       $booking->service=$request->input('service');
       $booking->graffiti_mats=$request->input('graffiti_mats');
       $booking->wifi_mats=$request->input('wifi_mats');
       $booking->wifi_restaurants=$request->input('wifi_restaurants');
       $booking->location=$request->input('location');
       $booking->status=$request->input('status');
            $data=array(
                      'company'=>$booking->company,
                      'email'=>$booking->email,
                      'address'=>$booking->address,
                      'service'=>$booking->service,
                      'mat'=>$booking->mat,
                      'graffiti_mats'=>$booking->graffiti_mats,
                      'wifi_mats'=>$booking->wifi_mats,
                      'wifi_restaurants'=>$booking->wifi_restaurants,
                      'location'=>$booking->location,
                      'status'=>$booking->status,
                     
                     
                    );
          bookings::where('id','=', $id)->update($data);
          $booking->update();
        return redirect('/home')->with('response', 'successfully updated customer details!');
    }
}
