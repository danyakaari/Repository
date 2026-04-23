<?php

namespace App\Http\Controllers;

use PHPUnit\Framework\TestSize\TestSize;

class CityController extends Controller
//lab6
//1
{
    public function practice6()
    {
        $names = collect(['taylor', 'abigail', null])
            ->map(fn($name) => strtoupper($name))
            ->reject(fn($name) => empty($name));
        
        return view('test.practice6', ['names' => $names]);
    }
}
?>