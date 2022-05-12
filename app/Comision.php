<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comision extends Model
{
    protected $fillable = ['name','introduce','boss','boss_image','boss_bio','chief','chief_image','chief_bio'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function commits(){
        return $this->hasMany(Commit::class);
    }
}
