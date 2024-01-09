<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\specification::class, function (Faker $faker) {
    return [
        'specification' => $faker->name,
        'status' =>1
    ];
});
