<?php

namespace App\Http\Controllers;

use App\Models\CssWord;

class CssController extends Controller
{
    public function show()
    {
        $words = CssWord::all();
        $first_word = CssWord::find(1);
        return view('css/index', compact('words','first_word'));
    }
}
