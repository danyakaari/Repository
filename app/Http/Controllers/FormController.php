<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //11
    public function task11_1(Request $request)
    {
        $result = null;
        
        if ($request->has('num')) {
            $result = $request->num * $request->num;
        }
        
        return view('forms.task11', ['result' => $result]);
    }
    
    //11.2
    public function task11_2(Request $request)
    {
        $result = null;
        
        if ($request->has('num')) {
            $result = $request->num * $request->num;
        }
        
        return view('forms.task11_2', ['result' => $result]);
    }
    
    //11,3
    public function task11_3(Request $request)
    {
        $sum = null;
        $showForm = true;
        
        if ($request->has('num1') && $request->has('num2')) {
            $sum = $request->num1 + $request->num2;
            $showForm = false;
        }
        
        return view('forms.task11_3', ['sum' => $sum, 'showForm' => $showForm]);
    }
    
    //11.4
    public function task11_4_form()
    {
        return view('forms.task11_4_form');
    }
    
    //11.4
    public function task11_4_result(Request $request)
    {
        return view('forms.task11_4_result', [
            'num1' => $request->num1,
            'num2' => $request->num2,
            'num3' => $request->num3,
        ]);
    }
}