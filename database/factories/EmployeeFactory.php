<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        // 'autors_id' => $faker->randomDigitNotNull,
        'position' => 'staff',
        'fullname' => $faker->name,
        'salaryrate' => 8000,
        'geolocation' => $faker->secondaryAddress,
        // 'news' => 'news',
    ];
});
