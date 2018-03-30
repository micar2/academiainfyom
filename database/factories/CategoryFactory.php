<?php
use App\Models\Categories;
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
$factory->define(Categories::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'route' => $faker->name,
        'category_id' => $faker->numberBetween(1.10),
//        'category_id' => function () { return factory(App\Models\Categories::class)->create()->id; },
//        'category_type' => function (array $category) {
//            return App\Models\Categories::find($category['category_id'])->type;
//        },
        'remember_token' => str_random(10),
    ];
});
