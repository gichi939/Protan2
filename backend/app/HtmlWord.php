<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HtmlWord extends Model
{
    protected $fillable = [
        'html_name',
        'html_meaning',
        'html_HowToUse',
        'html_example'
    ];

    public static $rules = array(
        'html_meaning' => 'required',
        'html_HowToUse' => 'required',
    );

    public function bookmarks()
  {
    return $this->hasMany(Bookmark::class, 'html_word_id');
  }
}
