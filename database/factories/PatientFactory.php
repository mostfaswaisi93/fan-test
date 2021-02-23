<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'aderss' => $faker->address,
        'phone' => $faker->randomNumber,
        'gender' => $gender,
        'DOB' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },








    ];
});
