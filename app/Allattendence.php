<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allattendence extends Model
{
    //
    protected $fillable = [
        'sno',
        'session',
        'total_days',
        'total_presents',
        'total_absents'
    ];
}
