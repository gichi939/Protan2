<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MypageServises
{
    public function show() {
        $user = User::find(Auth::id());
        return $user;
    }
}