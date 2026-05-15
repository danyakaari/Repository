<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lab20Controller extends Controller
{
    // 14.1 
    public function task14_1_set(Request $request)
    {
        $request->session()->put('name', 'danil');
        return 'сессия установлена /task14_1/get';
    }
    
    // 14.1 —
    public function task14_1_get(Request $request)
    {
        $name = $request->session()->get('name');
        return 'значение в сессии: ' . $name;
    }
    
    // 14.2 + 14.3 
    public function task14_2(Request $request)
    {
        $counter = $request->session()->get('counter', 1);
        $request->session()->put('counter', $counter + 1);
        
        return view('lab20.task14_2', ['counter' => $counter]);
    }
    
    // 14.4 
    public function task14_4(Request $request)
    {
        $firstVisit = $request->session()->get('first_visit', date('h:i:s d.m.y'));
        $request->session()->put('first_visit', $firstVisit);
        
        return view('lab20.task14_4', ['firstVisit' => $firstVisit]);
    }
    
    // 14.5 
    public function task14_5(Request $request)
    {
        if (!$request->session()->has('numbers')) {
            $request->session()->put('numbers', [1, 2, 3]);
        }
        
        $request->session()->push('numbers', rand(4, 100));
        $numbers = $request->session()->get('numbers');
        
        return view('lab20.task14_5', ['numbers' => $numbers]);
    }
    
    // 14.6 
    public function task14_6_set(Request $request)
    {
        $request->session()->put('temp', 'это временные данные');
        return 'данные сохранены! <a href="/task14_6/forget">удалить</a>';
    }
    
    // 14.6 
    public function task14_6_forget(Request $request)
    {
        $request->session()->forget('temp');
        return 'данные удалены из сессии!';
    }
    
    // 14.7 
    public function task14_7_set(Request $request)
    {
        $request->session()->put('message', 'это сообщение будет прочитано и удалено');
        return 'данные сохранены! <a href="/task14_7/pull">прочитать и удалить</a>';
    }
    
    // 14.7 
    public function task14_7_pull(Request $request)
    {
        $message = $request->session()->pull('message', 'ничего не найдено');
        return 'прочитано и удалено: ' . $message;
    }
    
    // 14.8 
    public function task14_8_set(Request $request)
    {
        $request->session()->put('a', 1);
        $request->session()->put('b', 2);
        $request->session()->put('c', 3);
        return 'сохранены a, b, c. <a href="/task14_8/flush">очистить всё</a>';
    }
    
    // 14.8 
    public function task14_8_flush(Request $request)
    {
        $request->session()->flush();
        return 'все данные сессии удалены!';
    }
    
    // 14.9 — all
    public function task14_9(Request $request)
    {
        $request->session()->put('name', 'danil');
        $request->session()->put('age', 20);
        $request->session()->put('city', 'moscow');
        
        $allData = $request->session()->all();
        
        return view('lab20.task14_9', ['allData' => $allData]);
    }
    
    // 14.10 
    public function task14_10(Request $request)
    {

        if (!$request->session()->has('test')) {
            $request->session()->put('test', date('h:i:s'));
        }
        
        $testValue = $request->session()->get('test');
        
        return view('lab20.task14_10', ['testValue' => $testValue]);
    }
    
    // 14.11 
    public function task14_11_set()
    {
        session(['user_login' => 'danyakaari']);
        return 'данные сохранены через session()! <a href="/task14_12_get">получить</a>';
    }
    
    // 14.12 
    public function task14_12_get()
    {
        $login = session('user_login', 'не установлен');
        return 'логин из сессии: ' . $login;
    }
    
    // 14.3 
    public function task14_3(Request $request)
    {
        $counter = $request->session()->get('counter_14_3', 1);
        $request->session()->put('counter_14_3', $counter + 1);
        
        return view('lab20.task14_3', ['counter' => $counter]);
    }
}