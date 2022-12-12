<?php

namespace App\Facades;

use App\consts\ServiseAliasConst;

class MypageFacades extends abstractFacade
{
    protected static function getFacadeAccessor()
    {
        return ServiseAliasConst::MYPAGE;
    }
}