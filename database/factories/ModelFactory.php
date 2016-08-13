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
 * Admin Model Factory.
 */
$factory->define(App\Teacher::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

/*
 * User Model Factory.
 */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'teacher_id' => $faker->numberBetween(1, 2),
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'status' => false,
        'remember_token' => str_random(10),
    ];
});

/*
 * Subject Model Factory.
 */
$factory->define(App\Subject::class, function (Faker\Generator $faker) {
    return [
        'teacher_id' => $faker->numberBetween(1, 2),
        'name' => $faker->text(12),
        'description' => $faker->text(100)
    ];
});

/*
 * Exam Model Factory.
 */
$factory->define(App\Exam::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->text(15),
        'description' => $faker->text(100),
        'subject_id' => $faker->numberBetween(1, 8)
    ];
});

/*
 * Question Model Factory.
 */
$factory->define(App\Question::class, function (Faker\Generator $faker) {
    return [
        'question' => $faker->sentence,
        'exam_id' => $faker->numberBetween(1, 10),
        'choice1' => $faker->word,
        'choice2' => $faker->word,
        'choice3' => $faker->word,
        'choice4' => $faker->word,
        'answer' => $faker->word
    ];
});

