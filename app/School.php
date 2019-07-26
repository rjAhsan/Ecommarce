<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function Students(){
        return $this->hasMany('App\Student');
    }
}
