<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'birth' => $faker->date,
        'gender' => rand(0,1),
        'address' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'salary' => $faker->randomDigit,
        'position' => $faker->randomDigit,
        'notes' => $faker->paragraph
    ];
});
