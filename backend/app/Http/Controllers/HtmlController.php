<?php

namespace App\Http\Controllers;

use App\HtmlWord;

class HtmlController extends Controller
{
    public function show()
    {
        $words = HtmlWord::all();
        $first_word = HtmlWord::find(1);
        return view('html/index', compact('words','first_word'));
    }
}
