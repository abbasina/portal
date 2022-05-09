<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commit extends Model
{
    public function comisions(){
        return $this->belongsTo(Comision::class);
    }
}
