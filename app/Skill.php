<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'skill_category_id',
        'skill',
        'ratings',
    ];

    /**
     * User can have many kind of trainings
     */
    public function skillCategory()
    {
        return $this->belongsTo('App\SkillCategory', 'skill_category_id', 'id');
    }


}
