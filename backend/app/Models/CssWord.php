<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CssWord extends Model
{
    protected $fillable = [
        'css_name',
        'css_meaning',
        'css_HowToUse',
        'css_example'
    ];

    public static $rules = array(
        'css_meaning' => 'required',
        'css_HowToUse' => 'required',
    );

    public function bookmarks()
    {
        return $this->hasMany(CssBookmark::class, 'css_word_id');
    }

    public function isLikedBy($user): bool
    {
        return CssBookmark::where('user_id', $user->id)->where('css_word_id', 1)->first() !== null;
    }
}
