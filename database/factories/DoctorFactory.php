<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Doctor;
use Faker\Generator as Faker;

$factory->define(Doctor::class, function (Faker $faker) {
    $gender = $faker->randomElement(['male', 'female']);
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'surname'=>$faker->lastName,
        'aderss'=>$faker->address,
        'qualification'=>$faker->title,
        'specialization'=>$faker->title,
        'phone'=>$faker->randomNumber,
        'photo'=>$faker->image('storage/app/doctors',60,60),
        'gender'=>$gender,
        'DOB'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },


    ];
});
