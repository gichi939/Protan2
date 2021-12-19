<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HtmlWord;

class ManagementController extends Controller
{
    public function display()
    {
        return view('management/index');
    }

    public function add_html()
    {
        return view('management/html');
    }

    public function insert_html(Request $request)
    {
        $HtmlWord = new HtmlWord;

        $HtmlWord->html_meaning = $request->html_meaning;
        $HtmlWord->html_HowToUse = $request->html_HowToUse;
        $HtmlWord->html_example = $request->html_example;

        $HtmlWord->save();

        return redirect()->action('ManagementController@add_html');
    }

    public function display_htmlList()
    {
        $html_words = HtmlWord::all();
        return view('management/list/htmlList',compact('html_words'));
    }

    public function add_css()
    {
        return view('management/css');
    }
}
