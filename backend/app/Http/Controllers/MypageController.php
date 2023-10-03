<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Bookmark;
use App\models\CssBookmark;
use App\Models\HtmlWord;
use App\Models\CssWord;
use App\Services\MypageServises;
use App\Facades\MypageFacades;

class MypageController extends Controller
{
    public function index() {
        return view('mypage/index', ['users' => MypageFacades::show()]);
    }

    public function bookmarkList(Request $request) {
        $user_id = Auth::id();
        

        //htmlのbookmarkした単語
        $bookmarks = Bookmark::where('user_id', $user_id)->get();
        $html_db = HtmlWord::all();


        //cssのbookmarkした単語
        $css_bookmarks = CssBookmark::where('user_id', $user_id)->get();
        $css_db = CssWord::all();
        $first_css_word = CssWord::find(1);
        
        return view('mypage/bookmarkList', 
        compact('html_db','css_db', 'bookmarks','css_bookmarks', 'first_css_word'));
    }
}
