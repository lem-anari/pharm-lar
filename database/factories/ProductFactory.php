<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'price' => $faker->numberBetween($min = 10, $max = 1000),
        'nameofproduct' => $faker->company,
    ];
});
