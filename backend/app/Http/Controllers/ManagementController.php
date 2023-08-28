<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HtmlWord;
use App\Models\CssWord;

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
        $HtmlWord->html_description = $request->html_description;
        

        $HtmlWord->save();

        return redirect()->action('ManagementController@add_html');
    }

    public function display_htmlList()
    {
        $html_words = HtmlWord::all();
        // dd($html_words);
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
        // dd($request->all());
        $HtmlWord->fill($form)->save();
        return redirect('/management/html_list');
    }

    public function destroy_htmlList(Request $request) {
        $destroy = HtmlWord::find($request->id);
        $destroy->delete();
        return redirect('/management/html_list');
    }

    public function add_css()
    {
        return view('management/css/index');
    }

    public function insert_css(Request $request)
    {
        $CssWord = new CssWord;
        $CssWord->css_name = $request->css_name;
        $CssWord->css_meaning = $request->css_meaning;
        $CssWord->css_HowToUse = $request->css_HowToUse;
        $CssWord->css_example = $request->css_example;
        $CssWord->css_description = $request->css_description;
        

        $CssWord->save();

        return redirect()->action('ManagementController@add_css');
    }

    public function display_cssList()
    {
        $css_words = CssWord::all();
        return view('management/css/css_list',compact('css_words'));
    }

    public function edit_cssList(Request $request) {
        $CssWord = CssWord::find($request->id);
        return view('management/css/edit_css', ['CssWord' => $CssWord]); 
    }

    public function update_cssList(Request $request)
    {
        $CssWord = CssWord::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $CssWord->fill($form)->save();
        return redirect('/management/css/css_list');
    }

}
