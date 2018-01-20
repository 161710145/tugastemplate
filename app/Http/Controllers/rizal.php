<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rizalp;

class rizal extends Controller
{
    
    public function rizalpradana(){
    $c=rizalp::all();        
    return view('tabel',compact('c')); 
}
}
