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
$factory->define(App\Models\Enrolment::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'student'=> $faker->numberBetween(1,131),
        'subject'=> $faker->numberBetween(1,121),
        'paid'=> $faker->numberBetween(0,1),
        'remember_token' => str_random(10),
    ];
});
