<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    /**
     * 複数代入しない属性
     * コントローラーでエラー発生防止
     *
     * @var array
     */
    protected $guarded = [];
}
