<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lab19Controller extends Controller
{
    //13.1
    public function task13_1(Request $request)
    {
        $data = null;
        
        if ($request->isMethod('post')) {
            $data = $request->all();
        }
        
        return view('lab19.task13_1', ['data' => $data]);
    }
    
    //13.2
    public function task13_2(Request $request)
    {
        $dataExcept = null;
        $dataOnly = null;
        
        if ($request->isMethod('post')) {
            $dataExcept = $request->except(['password', 'email']);
            $dataOnly = $request->only(['name', 'surname', 'login']);
        }
        
        return view('lab19.task13_2', [
            'dataExcept' => $dataExcept,
            'dataOnly' => $dataOnly
        ]);
    }
    
    //13.3
    public function task13_3(Request $request, $param1, $param2)
    {
        $formData = null;
        
        if ($request->isMethod('post')) {
            $formData = $request->all();
        }
        
        return view('lab19.task13_3', [
            'param1' => $param1,
            'param2' => $param2,
            'formData' => $formData
        ]);
    }
    
    //13.4—13.8
    public function task13_4_8(Request $request)
    {
        return view('lab19.task13_4_8', [
            'path' => $request->path(),
            'url' => $request->url(),
            'fullUrl' => $request->fullUrl(),
            'newUrl' => $request->fullUrlWithQuery(['page' => 1])
        ]);
    }
}