<?php
class PostController extends Controller
{
    public function show()
    {
        return view('post.show', [
            'title' => 'page title',
            'text'  => 'page content',
        ]);
    }
}
