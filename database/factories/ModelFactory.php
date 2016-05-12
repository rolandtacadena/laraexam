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

/*
 * User Model Factory
 */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

/*
 * Subject Model Factory
 */
$factory->define(App\Subject::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name
    ];
});

/*
 * Exam Model Factory
 */
$factory->define(App\Exam::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'subject_id' => $faker->numberBetween(1, 10)
    ];
});

