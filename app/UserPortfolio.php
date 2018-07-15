<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPortfolio extends Model
{
    protected $table = 'portfolio';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'icon_image',
        'url',
    ];
}
