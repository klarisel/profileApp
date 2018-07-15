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
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'dob_day',
        'dob_month',
        'dob_year',
        'address',
        'city',
        'state',
        'zipcode'
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
     * User has many kind of skills
     */
    public function skills()
    {
        return $this->hasMany('App\Skill', 'user_id');
    }

    /**
     * User has many kind of experiences
     */
    public function experiences()
    {
        return $this->hasMany('App\Experience','user_id','id');
    }

    /**
     * User can have many kind of education
     */
    public function education()
    {
        return $this->hasMany('App\Education', 'user_id');
    }

    /**
     * User can have many kind of trainings
     */
    public function training()
    {
        return $this->hasMany('App\Training', 'user_id');
    }

}
