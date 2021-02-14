<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Operation;
use Faker\Generator as Faker;

$factory->define(Operation::class, function (Faker $faker) {





    return [
        'doctor_id' => function () {
            return factory(App\Doctor::class)->create()->id;
        },

        'patient_id' => function () {
            return factory(App\Patient::class)->create()->id;
        },
        'type_operate' => $faker->name,
        'date_of_operate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'photo_teeth'=>$faker->image('storage/app/doctors',60,60),
    ];
});
