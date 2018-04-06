<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Carbon;

$factory->define(App\Models\Subject::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'teacher' => $faker->numberBetween(1,131),
        'category' => $faker->numberBetween(1,11),
        'duration'=> $faker->numberBetween(10,400),
        'students_max'=> $faker->numberBetween(20,40),
        'price'=> $faker->numberBetween(50,300),
        'start' => Faker\Provider\DateTime::dateTimeBetween($startDate = '-6 month', $endDate = '+6 month', $timezone = null),
        'remember_token' => str_random(10),
    ];
});
