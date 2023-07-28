<?php

namespace App\Http\Controllers;

use App\Models\HtmlWord;

class HtmlController extends Controller
{
    public function show()
    {
        $words = HtmlWord::all();
        $first_word = HtmlWord::first();
        return view('html/index', compact('words','first_word'));
    }
}
