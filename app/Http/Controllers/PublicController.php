<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use Illuminate\Http\Request;

class PublicController extends Controller
{


    public function home(){

        $resorts = Resort::latest()->paginate(12);
        return view('public.home',compact('resorts'));
    }
}
