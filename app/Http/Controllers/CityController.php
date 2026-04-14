<?php

namespace App\Http\Controllers;

use PHPUnit\Framework\TestSize\TestSize;

class CityController extends Controller
//1
{
    public function index()
    {
        $name = 'Даня';
        $age = '18';
        $salary = '5000';

        return view('test.test1', ['name' => $name,'age' => $age, 'salary' => $salary]);
    }
//2
    public function css()
    {
        $blue = 'blue';

        return view('test.test2', ['color' => $blue]);
    }
//3
    public function input()
    {
        $input1 = '1';
        $input2 = '2';
        $input3 = '3';
        
        return view('test.test3', ['input1' => $input1, 'input2' => $input2, 'input3' => $input3]); 
        
    }
//4
    public function red()
    {
        $red = 'red';

        return view('test.test4',['color' => $red]);
    }

//5 
    public function text()
    {
        $text = 'сайт';
        $href = 'http://prof.ru/';
        
        return view('test.test5', ['text' => $text,'href' => $href]);
    }
//6
    public function time()
    {
        $var = 'var';
        
        return view('test.test6',['var' => $var]);
    }
//7
    public function massive()
    {

    $massive = ['name' => 'Danil',
                 'age' => '25',
                'salary' => '1000'];

    return view('test.test7', ['massive' => $massive]); 
    }
//8 
    public function numbers()
    {
        $numbers = ['1','2','3','4','5'];

        return view ('test.test8',['numbers' => $numbers]);
    }
//9
    public function city()    
    {
        $city = 'Омск';
    
        return view ('test.test9', ['city' => $city]);
    }
//10
    public function location()
    {
        $location = ['country' => 'Россия', 'city' => 'Москва'];

        return view('test.test10',['location' => $location]);
    }
}
?>