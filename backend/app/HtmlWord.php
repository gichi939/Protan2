<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HtmlWord extends Model
{
    protected $fillable = [
        'html_meaning',
        'html_HowToUse',
        'html_example'
    ];
}
