<?php

namespace App\Http\Controllers;

use App\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{

  public function like(Request $request)
{
  $user_id = Auth::id();
  $word_id = $request->word_id;
  $already_liked = Bookmark::where('user_id', $user_id)->where('html_word_id', $word_id)->first();

  if (!$already_liked) {
    $bookmark=New Bookmark();
    $bookmark->user_id = $user_id;
    $bookmark->html_word_id = $word_id; //投稿idの取得
    $bookmark->save();
  } else {
    Bookmark::where('html_word_id', $word_id)->where('user_id', $user_id)->delete();
  }
  $bookmark_all_datas = Bookmark::get();
  $param = [
    'auth_id' => $user_id,
    'bookmark_all_datas' => $bookmark_all_datas,
  ];
  return response()->json($param);
}

  public function switch()
  {
    $user_id = Auth::id();
    $bookmark_all_datas = Bookmark::get();
    $param = [
      'auth_id' => $user_id,
      'bookmark_all_datas' => $bookmark_all_datas,
  ];
    return response()->json($param);
  }
}
