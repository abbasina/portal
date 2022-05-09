<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $fillable=['tags'];
    public function notes(){
        return $this->hasMany(Note::class);
    }
}
