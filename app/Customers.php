<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    public function Phones(){
         return $this->hasOne('App\Phones','C_id');
    }


}
