<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class heading extends Model
{
    public function article()
    {
        return $this->belongsTo(Article::class);
    } 
}
