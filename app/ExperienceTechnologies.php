<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienceTechnologies extends Model
{
    protected $table = 'experience_technologies';

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
