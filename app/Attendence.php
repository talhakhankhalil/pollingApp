<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    //
    protected $fillable = [
        'sno',
        'session',
        'date_of_attendence',
        'attendence'
    ];
}
