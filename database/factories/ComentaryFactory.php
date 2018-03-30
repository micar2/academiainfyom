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
$factory->define(App\Models\Comentary::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'content' => $faker->paragraph,
        'user_id' => function () { return factory(App\User::class)->create()->id; },
        'post_id' => function () { return factory(App\Models\Posts::class)->create()->id; },
        'remember_token' => str_random(10),
    ];
});
