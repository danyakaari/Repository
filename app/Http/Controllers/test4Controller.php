<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class test4Controller extends Controller
{
	public function show()
	{
		return view('test4.test4', [
			'title' => 'page title',
			'text' => 'page content',
		]);
	}
}
?>