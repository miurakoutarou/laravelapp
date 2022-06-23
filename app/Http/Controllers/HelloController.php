<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//function tag($tag, $txt) {
//   return "<{$tag}>" . $txt . "</{$tag}>";
//}

class HelloController extends Controller
{
    public function index()
{
    public function index()
    {
       return view('hello.index', ['message'=>'Hello!']);
    }
    
}
}