<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Subject::class, function (Faker $faker) {
    return[ 
        'name' => $faker->randomElement($array = array ('Math','History','Russian')),
    ];
});
