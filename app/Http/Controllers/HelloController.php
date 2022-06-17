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
       $data = ['one', 'two', 'three', 'four', 'five'];
       return view('hello.index', ['data'=>$data]);
    }
    
    

}