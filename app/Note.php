<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Verta;


class Note extends Model
{
    protected $fillable=['user_id','imageUrl','title','description','notebody','tags_id','confirm','publish'];
    
    public function user(){

        return $this->BelongsTo(User::class);

    }
    public static function scopeSearch($query , $keyword)
    {
        $query->where('title', 'LIKE', '%' . $keyword . '%')
        ->orWhere('description', 'LIKE', '%' . $keyword . '%');

        return $query;
    }
    public function getUpdatedAtAttribute($value) {
        return (new Verta($value,'Asia/Tehran','Y-n-j H:i'));
    }
    public function tag(){
        return $this->belongsTo(tag::class,'tags_id',"id");
    }
}
