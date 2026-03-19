<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test8Controller extends Controller
{
    public function show($name, $age, $surname)
    {
        return view('components.layout8',['surname' => $surname, 'name' => $name, 'age' => $age]);
    }
}
?>