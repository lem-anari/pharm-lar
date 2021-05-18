<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Purchase;
use Faker\Generator as Faker;

$factory->define(Purchase::class, function (Faker $faker) {
    return [
        'pharmacy_id' => $faker->numberBetween($min = 1, $max = 2),
        'audit_id' => $faker->numberBetween($min = 1, $max = 10),
        'product_id' => $faker->numberBetween($min = 1, $max = 5),
        'price' => $faker->numberBetween($min = 10, $max = 1000),
    ];
    //factory (App\Purchase::class)->create();
});
