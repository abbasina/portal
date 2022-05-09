<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fullname', 'password','role_id','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function tokens()
    {
        return $this->hasMany(Token::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function capitals()
    {
        return $this->belongsToMany(Capital::class);
    }
    public function notes()
    {
        return $this->hasMany(Note::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function hasRole($roles)
    {
        $roles=$roles->pluck('title');

        foreach($roles as $role){
           
            if($role==($this->role()->get()->first()->title))
            return (true);
        }
        return (false);
        
        
        
    }

    
}
