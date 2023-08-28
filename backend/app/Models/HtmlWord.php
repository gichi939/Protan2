<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Bookmark;

class HtmlWord extends Model
{
    protected $fillable = [
        'html_name',
        'html_meaning',
        'html_HowToUse',
        'html_example',
        'html_description'
    ];

    public static $rules = array(
        'html_meaning' => 'required',
        'html_HowToUse' => 'required',
    );

    public function bookmarks()
  {
    return $this->hasMany(Bookmark::class, 'html_word_id');
  }

  public function isLikedBy($user): bool {
    return Bookmark::where('user_id', $user->id)->where('html_word_id', 2)->first() !== null;
  }
}
