<?php
class PostController extends Controller
{
    public function show()
    {
        return view('test',['var1'=>'1','var2'=> '2']);

    }
}
?>