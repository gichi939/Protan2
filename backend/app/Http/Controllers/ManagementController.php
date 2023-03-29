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

    public function index(Request $request)
    {
        $html_words = HtmlWord::all();

        $search = $request->input('search');

        $query = HtmlWord::query();

        if ($search) {

            $spaceConversion = mb_convert_kana($search, 's');

            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);

            foreach($wordArraySearched as $value) {
                $query->where('html_name', 'like', '%'.$value.'%');
            }
            $html_words = $query->paginate(20);
        }

        return view('management/html_list')->with([
            'html_words'=>$html_words, 
            'search'=>$search,
        ]);
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
        // dd($HtmlWord);
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
