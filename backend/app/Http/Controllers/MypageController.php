<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;
use App\Bookmark;
use App\HtmlWord;

class MypageController extends Controller
{
    public function show() {
        $users = user::find(Auth::id());
        return view('mypage/index', ['users' => $users]);
    }

    public function bookmarkList() {
        $user_id = Auth::id();
        $bookmarks = Bookmark::where('user_id', $user_id)->get();
        $html_db = HtmlWord::all();
 
        return view('mypage/bookmarkList', compact('html_db', 'bookmarks'));
    }
}
