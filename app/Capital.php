<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capital extends Model
{
    protected $fillable=['name'];
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
