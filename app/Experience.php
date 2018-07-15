<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experience';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'date_from',
        'date_to',
        'position',
        'company_name',
    ];

    /**
     * Work experience have many descriptions under it
     */
    public function descriptions()
    {
        return $this->hasMany('App\ExperienceDescription', 'user_id');
    }


    /**
     * Work experience has one list of technologies under it
     */
    public function technologies()
    {
        return $this->hasOne('App\ExperienceTechnologies', 'user_id');
    }
}
