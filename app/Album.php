<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Verta;

class Album extends Model
{
    protected $fillable=['title','photographer','index'];
    public function gallery(){
        return $this->hasMany(Gallery::class);
    }
    public function getUpdatedAtAttribute($value) {
        return (new Verta($value,'Asia/Tehran','Y-n-j H:i'));
    }
}
