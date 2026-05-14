<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //25.4+25.10 
    public function getOne($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.one', ['post' => $post]);
    }

    //25.7+ 5.9
    public function getAll($order = 'date', $dir = 'desc')
    {
        $allowedOrder = ['id', 'title', 'date'];
        $allowedDir = ['asc', 'desc'];
        
        if (!in_array($order, $allowedOrder)) $order = 'date';
        if (!in_array($dir, $allowedDir)) $dir = 'desc';
        
        $posts = Post::orderBy($order, $dir)->get();
        return view('posts.all', ['posts' => $posts]);
    }
}
?>