<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Bookmark;
use App\Models\HtmlWord;
use App\Services\MypageServises;
use App\Facades\MypageFacades;

class MypageController extends Controller
{
    public function index() {
        // $mypageServises = new MypageServises();
        return view('mypage/index', ['users' => MypageFacades::show()]);
    }

    public function bookmarkList(Request $request) {
        $user_id = Auth::id();
        $bookmarks = Bookmark::where('user_id', $user_id)->get();
        $html_db = HtmlWord::all();
        $first_word = HtmlWord::find(1);

        $words = HtmlWord::paginate(20);

        $search = $request->input('search');

        $query = HtmlWord::query();

        if ($search) {

            $spaceConversion = mb_convert_kana($search, 's');

            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);

            foreach($wordArraySearched as $value) {
                $query->where('html_name', 'like', '%'.$value.'%');
            }
            $words = $query->paginate(20);

        }
        
        return view('mypage/bookmarkList', compact('html_db', 'bookmarks', 'first_word', 'words', 'search'));
    }
}
