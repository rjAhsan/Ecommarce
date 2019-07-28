<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phones extends Model
{
    //

public  function Customers(){
    return $this->belongsTo('App\Customers','Customers_id');
}

}
