<?php

namespace App\Services;

use App\user;
use Illuminate\Support\Facades\Auth;

class MypageServises
{
    public function show() {
        $user = user::find(Auth::id());
        return $user;
    }
}