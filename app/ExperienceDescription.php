<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienceDescription extends Model
{
    protected $table = 'experience_description';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'experience_id',
        'description',

    ];

}
