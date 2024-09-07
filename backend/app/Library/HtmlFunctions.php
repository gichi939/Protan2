<?php

namespace App\Library;
use App\Models\HtmlWord;

class HtmlFunctions
{
    public static function hoge()
    {
        dd(HtmlWord::all());
    }
}