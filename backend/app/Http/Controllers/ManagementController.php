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
        return view('management/html_word');
    }
    
    public function insert_html(Request $request)
    {
        $HtmlWord = new HtmlWord;
        $HtmlWord->html_name = $request->html_name;
        $HtmlWord->html_meaning = $request->html_meaning;
        $HtmlWord->html_HowToUse = $request->html_HowToUse;
        $HtmlWord->html_example = $request->html_example;
        

        $HtmlWord->save();

        return redirect()->action('ManagementController@add_html');
    }

    public function display_htmlList()
    {
        $html_words = HtmlWord::all();
        return view('management/html_list',compact('html_words'));
    }

    public function edit_htmlList(Request $request) {
        $HtmlWord = HtmlWord::find($request->id);
        // dd($HtmlWord);
        return view('management/edit', ['HtmlWord' => $HtmlWord]); 
    }

    public function update_htmlList(Request $request)
    {
        $HtmlWord = HtmlWord::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $HtmlWord->fill($form)->save();
        return redirect('/management/html_list');
    }

    public function add_css()
    {
        return view('management/css');
    }

}
