<?php

namespace App\Facades;

use App\consts\ServiseAliasConst;

class MypageFacades extends AbstractFacade
{
    protected static function getFacadeAccessor()
    {
        return ServiseAliasConst::MYPAGE;
    }
}