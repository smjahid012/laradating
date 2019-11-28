<?php

namespace App;
use App\Country;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['email', 'users_id', 'gender', 'height','countries','languages' ,'dob','user_age','mybio','myinterest'];

    // public function countries(){
    //     return $this->hasMany('App\Country', 'id', 'id');
    // }


}

