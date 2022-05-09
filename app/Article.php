<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Verta;

class Article extends Model
{
    protected $fillable=['imageUrl','title','slug','description','comision_id','capital_id','body','tags_id','confirm','publish'];
    
       public function comision()
    {
        return $this->belongsTo(Comision::class);
    }
    public function capital()
    {
        return $this->blongsTo(Capital::class);
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
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
