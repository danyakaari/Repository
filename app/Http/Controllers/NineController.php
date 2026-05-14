<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NineController extends Controller
{
    public function index()
    {
        //lab9
        
        //1
        $users = DB::table('users')->get();
        dump($users);

        //2
        $users = DB::table('users')->get();
        foreach ($users as $user) {
            dump($user);
        }

        //3 PMA

        //4 PMA

        //5
        $start = microtime(true);
        DB::table('posts')->where('id', '!=', 3)->get();
        dump('Время: ' . (microtime(true) - $start) . ' сек');

        //6
        $users = DB::table('users')->select('name', 'email')->get();
        dump($users);

        //7
        $users = DB::table('users')->select('name', 'email as user_email')->get();
        dump($users);

        //8
        $users = DB::table('users')->where('age', 30)->get();
        dump($users);

        //9
        $users = DB::table('users')->where('age', '!=', 30)->get();
        dump($users);

        //10
        $users = DB::table('users')->where('age', '>', 30)->get();
        dump($users);

        //11
        $users = DB::table('users')->where('age', '<', 30)->get();
        dump($users);

        //12
        $users = DB::table('users')->where('age', '<=', 30)->get();
        dump($users);

        //13
        $users = DB::table('users')->whereBetween('age', [20, 30])->get();
        dump($users);

        //14
        $users = DB::table('users')->where('age', 30)->orWhere('id', '>', 4)->get();
        dump($users);

        //15
        $users = DB::table('users')
            ->where('age', 30)
            ->orWhere('salary', 500)
            ->orWhere('id', '>', 4)
            ->get();
        dump($users);

        //16
        $users = DB::table('users')
            ->where('salary', 500)
            ->orWhereBetween('age', [20, 30])
            ->get();
        dump($users);

        //17
        $users = DB::table('users')
            ->whereBetween('age', [20, 30])
            ->orWhereBetween('salary', [400, 800])
            ->get();
        dump($users);

        //18
        $user = DB::table('users')->where('id', 3)->first();
        dump($user);

        //19 PMA

        //20
        $email = DB::table('users')->where('id', 3)->value('email');
        dump($email);
    }
}