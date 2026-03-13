<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaxxController extends Controller
{
    public function show($game, $score)
    {
        return view('okak.test3',['game' => $game, 'score'=> $score]);  
    }
    
}