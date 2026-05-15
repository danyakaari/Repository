<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lab22Controller extends Controller
{
    //16.1
    public function task16_1_set()
    {
        session(['flash_message' => 'это флеш-сообщение! оно покажется только один раз']);
        return 'флеш-сообщение установлено! <a href="/task16_1/get">перейти на второе действие</a>';
    }
    
    public function task16_1_get(Request $request)
    {
        $message = $request->session()->get('flash_message', 'сообщения нет (оно уже было прочитано или не установлено)');
        return view('lab22.task16_1', ['message' => $message]);
    }
    
    //16.2
    
    public function task16_2_form(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->has('num1') && $request->has('num2') && 
                $request->has('num3') && $request->has('num4') && $request->has('num5')) {
                

                $request->flash();
                
                return redirect('/task16_2/result');
            }
        }
        
        return view('lab22.task16_2_form');
    }
    
    public function task16_2_result(Request $request)
    {
        $num1 = $request->old('num1', 0);
        $num2 = $request->old('num2', 0);
        $num3 = $request->old('num3', 0);
        $num4 = $request->old('num4', 0);
        $num5 = $request->old('num5', 0);
        
        $sum = $num1 + $num2 + $num3 + $num4 + $num5;
        
        return view('lab22.task16_2_result', [
            'num1' => $num1,
            'num2' => $num2,
            'num3' => $num3,
            'num4' => $num4,
            'num5' => $num5,
            'sum' => $sum
        ]);
    }
    
    //6.3
    
    public function task16_3(Request $request)
    {
        $data = null;
        
        if ($request->isMethod('post')) {
            //флеш
            $request->flash();
            
            $data = 'форма отправлена данные сохранены.';
        }
        
        return view('lab22.task16_3', ['data' => $data]);
    }
}