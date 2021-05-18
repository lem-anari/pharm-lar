<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Salary;
use Faker\Generator as Faker;

$factory->define(Salary::class, function (Faker $faker) {
    return [
        'month' => 04,
        'year' => 2021,
        'salary' => 8000,
        'counteroffines' => $faker->randomDigit,
        'employee_id' => 4,
    ];
});
