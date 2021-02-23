<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Prescription;
use Faker\Generator as Faker;

$factory->define(\App\Prescription::class, function (Faker $faker) {
    return [
        'doctor_id' => function () {
            return factory(App\Doctor::class)->create()->id;
        },

        'patient_id' => function () {
            return factory(App\Patient::class)->create()->id;
        },
        'type_of_prescription' => $faker->name,
        'date_of_prescription' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'details' => $faker->text,


    ];
});
