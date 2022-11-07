<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;

class MypageController extends Controller
{
    public function show() {
        $users = user::find(Auth::id());
        return view('mypage/index', ['users' => $users]);
    }
}
