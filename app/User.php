<?php

namespace App;

use Auth;
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
        'email', 'password', 'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function employee()
    {
        return $this->hasOne('App\Employee', 'id', 'id');
    }
    public function contract(){
        return $this->hasOne('\App\Contracts', 'emp_id','id')->orderBy('created_at', 'desc');
    }
    Public function requests(){
        return $this->hasManyThrough('\App\Requests','\App\Employee','id','emp_id','id', 'id');
    }
}
