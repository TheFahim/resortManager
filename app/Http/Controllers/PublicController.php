<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Resort;
use Illuminate\Http\Request;

class PublicController extends Controller
{


    public function home(){

        $resorts = Resort::latest()->paginate(12);
        return view('public.home',compact('resorts'));
    }

    public function booking(){
        return view('public.booking');
    }

    public function store(Request $request, Booking $booking){

            $formFields = $request->validate([
                        'customer_name' => 'required',
                        'address' =>'nullable',
                        'phone' => 'required',
                        'email' => 'required',
                        'resort_name' => 'required',
                        'resort_name' => 'required',
                        'start_date' => 'required',
                        'end_date' => 'required'
                    ]);


            $booking->create($formFields);

            return redirect()->route('home')->with('message', 'Booking Request Created Successfully');

    }
}
