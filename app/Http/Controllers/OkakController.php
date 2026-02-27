<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OkakController extends Controller
{
    public function show($surname,$name)
    {
        return 'Hello my surname - '.$surname.' and my name - '.$name;
    }
}
