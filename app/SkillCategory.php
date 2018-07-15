<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillCategory extends Model
{
    protected $table = 'skills_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category',
       ];

}
