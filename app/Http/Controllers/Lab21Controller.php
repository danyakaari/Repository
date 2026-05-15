<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lab21Controller extends Controller
{
    //15.1 
    
    public function task15_1(Request $request)
    {
        $error = null;
        
        if ($request->isMethod('post')) {
            $num = $request->input('num');
            
            if ($num >= 1 && $num <= 10) {
                return redirect('/task15_1/success');
            } else {
                $error = 'некорректное число! введите от 1 до 10.';
            }
        }
        
        return view('lab21.task15_1', ['error' => $error]);
    }
    
    public function task15_1_success()
    {
        return view('lab21.task15_1_success');
    }
    
    // 15.2 
    
    public function task15_2(Request $request)
    {
        $error = null;
        
        if ($request->isMethod('post')) {
            $email = $request->input('email');
            
            if (strpos($email, '@') !== false && strpos($email, '.') !== false) {
                return redirect('/task15_2/success')->withInput();
            } else {
                $error = 'некоректный email!';
            }
        }
        
        return view('lab21.task15_2', ['error' => $error]);
    }
    
    public function task15_2_success(Request $request)
    {
        $email = $request->input('email');
        return view('lab21.task15_2_success', ['email' => $email]);
    }
    
    //15.3
    
    public function task15_3_old()
    {
        return redirect()->route('new.page');
    }
    
    public function task15_3_new()
    {
        return 'вы попали на новую страницу';
    }
    
    //15.4
    
    public function task15_4_redirect()
    {
        return redirect()->route('test.params', ['param1' => 42, 'param2' => 100]);
    }
    
    public function task15_4_target($param1, $param2)
    {
        return "вы попали на страницу с параметрами: param1 = $param1, param2 = $param2";
    }
}