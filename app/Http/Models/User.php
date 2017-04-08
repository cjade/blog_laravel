<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname', 'user_email', 'password','avatar','type','last_login_time','last_login_ip'
    ];
    protected $primaryKey = 'user_id';
    public $timestamps = true;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected function getDateFormat(){
        return time();
    }
    protected function asDateTime($value)
    {
        return $value;
    }
}
