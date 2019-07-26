<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    public function Teacher(){
        return $this->belongsToMany(Teacher::class,'teacher_roles');
    }
}
