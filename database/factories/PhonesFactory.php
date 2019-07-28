<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Phones;
use Faker\Generator as Faker;

$factory->define(Phones::class, function (Faker $faker) {
    $user_ids = \DB::table('customers')->select('id')->get();
    $user_id = $faker->randomElement($user_ids)->id;
    return [
        'Brand'=>$faker->unique()->name,
        'Model'=>$faker->titleMale,
        'Customers_id'=>$user_id
    ];
});
