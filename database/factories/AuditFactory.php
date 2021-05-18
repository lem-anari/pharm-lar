<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Audit;
use Faker\Generator as Faker;

$factory->define(Audit::class, function (Faker $faker) {
    return [
        'pharmacy_id' => $faker->numberBetween($min = 1, $max = 2),
        'dateandtime' => $faker->dateTimeBetween($startDate = '-7 days', $endDate = '+30 days', $timezone = null),
        'employee_id' => $faker->numberBetween($min = 1, $max = 4),
        'delegate' => $faker->boolean,
        'delay'  => $faker->boolean
    ];
    // factory (App\Audit::class)->create();
});
