<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id'];
    protected $dates = ['published_at'];

    //大文字変換アクセッサ
    public function getTitleAttribute($value)
    {
      return mb_strtoupper($value);
    }

    //小文字変換ミューテータ
    public function setTitleAttribute($value)
    {
      $this->attributes['title'] = mb_strtolower($value);
    }
}
