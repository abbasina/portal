<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(){
        
        return $this->hasMany(User::class);
    }
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
    public function capitals()
    {
        return $this->belongsToMany(Capital::class);
    }
}
