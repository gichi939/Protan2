<?php

namespace App\Http\Controllers;

use App\Bookmark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
  //   public function like($id)
  // {
  //   $bookmark=New Bookmark();
  //   $bookmark->html_word_id = $id;
  //   $bookmark->user_id = Auth::id();
  //   $bookmark->save();

  //   session()->flash('success', 'You Liked the Reply.');

  //   return redirect()->back();
  // }

  public function like(Request $request)
{
  $user_id = Auth::id();
  $word_id = $request->word_id;
  $already_bookmark = Bookmark::where('user_id', $user_id)->where('word_id', $word_id)->first();
  if (!$already_bookmark) {
    $bookmark=New Bookmark();
    $bookmark->user_id = Auth::id();
    $bookmark->html_word_id = $request->word_id; //2.投稿idの取得
    $bookmark->save();
  } else {
    Bookmark::where('user_id', $user_id)->where('word_id', $word_id)->delete();
  }
  return redirect()->back();
}

  public function unlike($id)
  {
    $like = Bookmark::where('html_word_id', $id)->where('user_id', Auth::id())->first();
    $like->delete();

    session()->flash('success', 'You Unliked the Reply.');

    return redirect()->back();
  }
}
