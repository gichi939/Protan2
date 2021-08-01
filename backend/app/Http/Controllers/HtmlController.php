<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function show() 
    {
        $words = array();
        $words = ["html","head","link","meta","style","title","body","footer",
        "header","h1","main","nav","section","blockquote","dd","div",
        "dl","dt","hr","li","ol","p","pre","ul","a","abbr","br","cite","code",
        "data","i","mark","q","span","strong","time","audio","img","video","svg",
        "canvas","script","table","td","th","thead","tr","button","form","input",
        "label","option","select","textarea","details"];
        
        return view('html/index')->with('words',$words);
    }
}
