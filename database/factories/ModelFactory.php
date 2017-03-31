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
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => ucfirst($faker->word),
    ];
});
$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'user_id' => mt_rand(1,5),
        'category_id' => mt_rand(1,5),
        'title' => $faker->sentence,
        'description' => $faker->sentences(2, true),
        'body' => $faker->paragraphs(5, true),
    ];
});
$factory->define(App\Models\Comment::class, function (Faker\Generator $faker) {
    return [
        'post_id' => mt_rand(1,10),
        'user_id' => mt_rand(1,10),
        'body' => $faker->sentences(1, true),
    ];
});




