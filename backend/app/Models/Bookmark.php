<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $fillable = ['html_word_id','user_id'];

  public function htmlWord()
  {
    return $this->belongsTo(HtmlWord::class);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
