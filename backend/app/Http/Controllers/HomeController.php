<?php

namespace App\Http\Controllers;

use App\HtmlWord;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

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

    function showData($id)
    {
      //取得したユーザーの情報を$userに入れてuser/download.blade.phpに返す
      $user = userPost::find($id);
      return view('user.download', compact('user')); //bladeの中身にしたいbladeファイルを返す
    }
}
