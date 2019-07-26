<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function Role(){
        return $this->belongsToMany(Role::class,'teacher_roles');
    }
}
