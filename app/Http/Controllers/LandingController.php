<?php

namespace App\Http\Controllers;

use App\Models\Form1;
use Illuminate\Http\Request;

class LandingController extends Controller
{
   public function index(){

    return view('landing.beranda');
   }


public function tampil(){
    return view('landing.video');
}

public function beranda(){

}
}
