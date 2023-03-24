<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CssBookmark extends Model
{
    protected $fillable = ['css_word_id','user_id'];

  public function cssWord()
  {
    return $this->belongsTo(CssWord::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
