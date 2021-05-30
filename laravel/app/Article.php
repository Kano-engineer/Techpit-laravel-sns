<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//==========ここから追加==========
use Illuminate\Database\Eloquent\Relations\BelongsTo;
//==========ここまで追加==========

class Article extends Model
{
    //==========ここから追加==========
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
    //==========ここまで追加==========
}