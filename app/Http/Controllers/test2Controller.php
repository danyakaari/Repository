<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test2Controller extends Controller
{
    public function show($name,$surname)
    {
      return view('test2',['name' => $name, 'surname'=> $surname]);  
    }
    
}
