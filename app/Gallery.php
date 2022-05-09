<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Verta;

class Gallery extends Model
{
    protected $table = 'galleries';

protected $fillable = ['image', 'thumbnail', 'title', 'status'];
public function album()
{
    return $this->belongsTo(Album::class);
}
public function getUpdatedAtAttribute($value) {
    return (new Verta($value,'Asia/Tehran','Y-n-j'.'|'.'H:i'));
}
}
