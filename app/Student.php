<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function School(){
        return $this->belongsTo('App\School');
    }
}
