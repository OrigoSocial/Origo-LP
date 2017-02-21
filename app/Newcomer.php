<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newcomer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'newcomers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'name', 'industry', 'message', 'interested_early_access'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
