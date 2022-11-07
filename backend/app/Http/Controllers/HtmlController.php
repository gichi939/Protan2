<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HtmlList;
use App\HtmlWord;

class HtmlController extends Controller
{
    public function show() 
    {
        $words = HtmlWord::all();
        // dd($words);
        
        return view('html/index', compact('words'));
    }

  public function is_liked_by_auth_user()
  {
    $id = Auth::id();

    $bookmarks = array();
    foreach($this->bookmarks as $bookmark) {
      array_push($bookmarks, $bookmark->user_id);
    }

    if (in_array($id, $bookmarks)) {
      return true;
    } else {
      return false;
    }
  }
}
