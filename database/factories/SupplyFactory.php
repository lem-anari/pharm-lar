<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supply;
use Faker\Generator as Faker;

$factory->define(Supply::class, function (Faker $faker) {
    return [
        'pharmacy_id' => $faker->numberBetween($min = 1, $max = 2),
        'dateofsupply' => $faker->date($format = 'Y-m-d', $max = '+10 days'),
        'product_id' => $faker->numberBetween($min = 1, $max = 5),
        'price' => $faker->numberBetween($min = 10, $max = 1000),
    ];
    //factory (App\Supply::class)->create();
});
