<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lab23Controller extends Controller
{
    //7.1 
    public function task17_1()
    {
        return response('привет', 200)
            ->header('Content-Type', 'text/plain')
            ->header('X-Developer', 'danyakaari')
            ->header('X', '23');
    }
    
    //17.1 
    public function task17_1_json()
    {
        $data = [
            'status' => 'success',
            'message' => 'это JSON ответ',
            'laba' => 23
        ];
        
        return response()->json($data, 200)
            ->header('X-Developer', 'danyakaari')
            ->header('X-API-Version', '1.0');
    }
    
    public function task17_1_view()
    {
        return response()->view('lab23.task17_1', ['name' => 'danyakaari'])
            ->header('X-Developer', 'danyakaari')
            ->header('Content-Type', 'text/html');
    }
}