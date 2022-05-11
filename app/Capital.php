<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capital extends Model
{
    protected $fillable=['name','Ostan','city_people_amount','city_places','city_address','city_tel','city_website','city_website_url','imageUrl'];
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
