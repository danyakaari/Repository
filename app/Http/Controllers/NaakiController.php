<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NaakiController extends Controller
{
    public function show()
    {
      return view('void', ['slot'=>55]);  
    }
    
}
