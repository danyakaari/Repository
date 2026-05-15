<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lab18Controller extends Controller
{
    //12.1
    

    public function task12_1_form()
    {
        return view('lab18.task12_1_form');
    }
    

    public function task12_1_result(Request $request)
    {
        $text = $request->input('text');
        return view('lab18.task12_1_result', ['text' => $text]);
    }
    
    //12.2
    
    public function task12_2(Request $request)
    {
        $method = $request->method();
        return view('lab18.task12_2', ['method' => $method]);
    }
    
    //12.3
    
    public function task12_3(Request $request)
    {
        $icon = $request->isMethod('get') ? '!' : '!!';
        return view('lab18.task12_3', ['icon' => $icon]);
    }
    
    //12.4
    
    public function task12_4(Request $request)
    {
        $result = null;
        
        if ($request->isMethod('post')) {
            $num1 = $request->input('num1');
            $num2 = $request->input('num2');
            $result = $num1 + $num2;
        }
        
        return view('lab18.task12_4', ['result' => $result]);
    }
}