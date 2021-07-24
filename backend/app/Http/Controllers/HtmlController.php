<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function show() 
    {
        $words = array();
        $words = ["div","h1","ul","li","a","img","class","id","section"];
        
        return view('html/index')->with('words',$words);
    }
}
