<?php
use Faker\Provider\Base;
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
$factory->define(App\Models\Posts::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->name,
        'category' => function(){ return factory(App\Models\Categories::class)->create()->id; },
        'content' => $faker->paragraph,
        'view' => $faker->randomElement($array = array ('private','public')),
        'user_id' => function () { return factory(App\User::class)->create()->id; },
        'remember_token' => str_random(10),
    ];
});
