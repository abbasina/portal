<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Verta;

class Comment extends Model
{
    protected $fillable=['comment','confirmStatus','parent_id','article_id','user_id'];
    public function comments()
{
    return $this->hasMany(Comment::class , 'parent_id' , 'id');
}
public function user()
{
    return $this->belongsTo(User::class);
}
public function getUpdatedAtAttribute($value) {
    return (new Verta($value));
}
public function article()
{
    return $this->belongsTo(Article::class);
}
}

