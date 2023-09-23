<?php

namespace App\Http\Controllers;

use App\Models\HtmlWord;
use GuzzleHttp\Psr7\Request;

class HtmlController extends Controller
{
    public function show()
    {
        $words = HtmlWord::all();
        $first_word = HtmlWord::first();
        return view('html/index', compact('words','first_word'));
    }

    public function split_word(Request $request) {
        dd($request);



    }
}
