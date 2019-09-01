<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class role extends Controller
{
    //
    public function index(){
        $hasil = User::all();

        return view('datarole',['liat'=>$hasil]);
   }

   public function index1(){
    $hasil = User::all();

    return view('dashboard',['liat'=>$hasil]);
}
}
