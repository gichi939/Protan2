<?php

namespace App\Services;

use App\user;
use Illuminate\Support\Facades\Auth;

class MypageServises
{
    public function show() {
        $users = user::find(Auth::id());
        return $users;
    }
}