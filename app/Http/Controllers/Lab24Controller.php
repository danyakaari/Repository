<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lab24Controller extends Controller
{
    //18.1 время последнего захода
    public function task18_1(Request $request)
    {
        $lastVisit = $request->cookie('last_visit');
        $currentTime = time();
        $message = null;
        
        if ($lastVisit) {
            $diff = $currentTime - $lastVisit;
            $hours = floor($diff / 3600);
            $minutes = floor(($diff % 3600) / 60);
            $seconds = $diff % 60;
            $message = "с предыдущего захода прошло: {$hours} ч {$minutes} мин {$seconds} сек";
        } else {
            $message = "добро пожаловать в первый раз!";
        }
        
        return response()->view('lab24.task18_1', ['message' => $message])
            ->cookie('last_visit', $currentTime, 60 * 24 * 365); 
    
    // 18.2  день рожденияформа
    public function task18_2(Request $request)
    {
        $birthday = $request->cookie('birthday');
        $congrats = null;
        
        if ($birthday) {
            $today = date('m-d');
            $birth = date('m-d', strtotime($birthday));
            
            if ($today == $birth) {
                $congrats = "с днём рождения! 🎉";
            }
        }
        
        return view('lab24.task18_2', ['congrats' => $congrats, 'birthday' => $birthday]);
    }
    
    // 18.2 др
    public function task18_2_save(Request $request)
    {
        $birthday = $request->input('birthday');
        
        return redirect('/task18_2')
            ->cookie('birthday', $birthday, 60 * 24 * 365); 
    }
    
    // 18.3 — счётчик через cookie
    public function task18_3(Request $request)
    {
        $counter = $request->cookie('counter', 1);
        $newCounter = $counter + 1;
        
        return response()->view('lab24.task18_3', ['counter' => $counter])
            ->cookie('counter', $newCounter, 60 * 24 * 365); 
    }
}