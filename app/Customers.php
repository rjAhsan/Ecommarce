<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    //Accessors Get data from DB And Apply this Function To
    //This Attribute befor Displaying
    public function getemailAttribute($attribute){
            return lcfirst( $attribute);
    }

    public function setnameAttribute($val){
        $this->attributes['name'] = ucwords($val);

    }



    public function Phones(){
         return $this->hasOne('App\Phones','Customers_id');
    }


}
