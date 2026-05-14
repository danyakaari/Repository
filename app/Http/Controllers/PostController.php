<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //all
    public function getAll($order = 'date', $dir = 'desc')
    {
        $posts = Posts::orderBy($order, $dir)->get();
        return view('posts.all', ['posts' => $posts]);
    }
    
    //1
    public function getOne($id)
    {
        $post = Posts::findOrFail($id);
        return view('posts.one', ['post' => $post]);
    }
    
    //new
    public function newPost(Request $request)
    {
        if ($request->has('submit')) {
            $post = new Posts();
            $post->title = $request->title;
            $post->desc = $request->desc;
            $post->text = $request->text;
            $post->date = $request->date;
            $post->save();
            
            return redirect('/post/all')->with('success', 'Статья добавлена!');
        }
        
        return view('posts.new');
    }
    
    //26.2
    public function rework()
    {
        $post = Posts::find(1);
        if ($post) {
            $post->title = 'Новый заголовок записи с id 1';
            $post->desc = 'Новое описание записи с id 1';
            $post->save();
            return redirect('/post/all')->with('success', 'Статья #1 обновлена!');
        }
        return redirect('/post/all')->with('error', 'Статья не найдена!');
    }
    
    //26.3
    public function editPost(Request $request, $id)
    {
        $post = Posts::findOrFail($id);
        
        if ($request->has('submit')) {
            $post->title = $request->title;
            $post->desc = $request->desc;
            $post->date = $request->date;
            $post->text = $request->text;
            $post->save();
            
            return redirect('/post/all')->with('success', 'Статья #' . $post->id . ' "' . $post->title . '" обновлена!');
        }
        
        return view('posts.edit', ['post' => $post]);
    }
}
?>