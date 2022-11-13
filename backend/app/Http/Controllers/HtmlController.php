<?php

namespace App\Http\Controllers;

use App\HtmlWord;

class HtmlController extends Controller
{
    public function show() 
    {
        $words = HtmlWord::all();
        
        return view('html/index', compact('words'));
    }
}
