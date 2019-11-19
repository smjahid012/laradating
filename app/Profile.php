<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['email', 'users_id', 'gender', 'height', 'dob', 'mybio','myinterest'];

}

